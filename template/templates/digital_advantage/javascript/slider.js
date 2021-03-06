var cci = cci || {};
cci.slideshow = new Class({
	Implements: [Options, Events],
	
	options: {
		slides: [],
		startIndex: 0,
		wrap: true
		
		// onShow: $empty
	},
	
	initialize: function (options) {
		this.setOptions(options);
		
		this.indicators = new Element('ul', {
			'class': 'indicators'
		});
		
		this.addSlides(this.options.slides);
		if (this.slides.length) {
			this.showSlide(this.options.startIndex);
			
			this.indicators.inject(this.slides[0].getParent(), 'after');
		}
	},
	slides: [],
	maxHeight: 0,
	indicators: null,
	timer: null,
	
	addSlides: function (slides) {
		$$(slides).each(function(slide) {
			var i;
			
			slide.setStyle('display', 'block');
			this.maxHeight = Math.max(this.maxHeight, slide.getSize().y);
			slide.setStyle('display', 'none');
			
			this.slides.include(slide);
			i = new Element('li');
			i.setStyles({
				cursor: 'pointer'
			});
			i.addEvent('click', function () {
				this.showSlide(this.indicators.getElements('li').indexOf(i));
			}.bind(this));
			this.indicators.adopt(i);
		}, this);
		
		this.slides.each(function (slide) {
			var img = slide.getElement('img');
			
			slide.setStyles({
				display: 'block',
				height: this.maxHeight + 'px'
			});

			img.setStyles({
				height: this.maxHeight + 'px',
				width: 'auto'
			});
			
			img.setStyle('left', Math.round((470-img.getSize().x)/2) + 'px');
			slide.setStyle('display', 'none');
		}.bind(this));
	},
	
	addSlide: function (slide) {
		this.addSlides($splate(slide));
	},
	
	cycleForward: function () {
		if ($chk(this.now) && this.now < this.slides.length - 1) {
			this.showSlide(this.now + 1);
		} else if ((this.now) && this.options.wrap) {
			this.showSlide(0);
		} else if (!$defined(this.now)) {
			this.showSlide(this.options.startIndex);
		}
	},
	
	cycleBackwards: function () {
		if (this.now > 0) {
			this.showSlide(this.now - 1);
		} else if (this.options.wrap) {
			this.showSlide(this.slides.length - 1);
		}
	},
	
	showSlide: function (iToShow) {
		var now, currentSlide, slide, fadeIn;
		
		if (this.fading) {
			return;
		}
		
		if (this.timer) {
			clearTimeout(this.timer);
		}
		
		now = this.now;
		currentSlide = this.slides[now];
		slide = this.slides[iToShow];
		
		fadeIn = function (s) {
			this.fading = true;
			
			s.setStyles({
				display: 'block',
				height: this.maxHeight + 'px',
				opacity: 0,
				visibility: 'visible'
			});
			
			s.get('tween').start('opacity', 1).chain(function () {
				this.fading = false;
				this.indicators.getElements('li')[this.now].addClass('active');
				this.fireEvent('onShow', [slide, iToShow]);
			}.bind(this));
		}.bind(this);
		
		if (slide) {
			if ($chk(now) && now != iToShow) {
				this.fading = true;
				
				currentSlide.get('tween').start('opacity', 0).chain(function () {
					currentSlide.setStyle('display', 'none');
					fadeIn(slide);
					
					this.timer = this.cycleForward.delay(8000, this);
				}.bind(this));
				this.indicators.getElements('li').removeClass('active');
			} else {
				fadeIn(slide);
				
				this.timer = this.cycleForward.delay(8000, this);
			}
					
			this.now = iToShow;
		}
	}
});

window.addEvent('load', function () {
	var s = new cci.slideshow({
		slides: $$('.moduletable.slider li')
	});
});

window.addEvent('domready', function() {
	var images = $$('img');
	
	images.each(function (image) {
		var normal, over;
		
		normal = image.src;
		over = image.src.replace('_normal.', '_over.');
		
		if (normal == over)
			return;
			
		image.addEvents({
			mouseenter: function () {
				image.src = over;
			},
			mouseleave: function() {
				image.src = normal;
			}
		});
	});
});