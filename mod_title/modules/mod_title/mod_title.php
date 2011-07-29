<?php
// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

$app = JFactory::getApplication();
$articleId = JRequest::getVar('id');

$model = JModel::getInstance('Article', 'ContentModel', array('ignore_request' => true));
$model->setState('params', $app->getParams());
$article = $model->getItem($articleId);

$title = $article->title;
$cat = ($article->category_title !== 'Uncategorised')? $article->category_title : null;

require JModuleHelper::getLayoutPath('mod_title', $params->get('layout', 'default'));
