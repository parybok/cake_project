<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Пошукова система 109');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('style');
		echo $this->Html->script('jquery-1-10-min');
		echo $this->Html->script('js');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>

<body>
	<div id="container">
			<div id='header'> 
				<div id='header_gradient'>
					<div class='logo'>
					<?php echo $this->Html->image('logo.gif');?>
					</div>
				<div class='menu'>
				<?php 
				echo $this->Html->link('Знижки','#'); 
				echo $this->Html->link('Довідка','/Reference'); 
				echo $this->Html->link('Карта','#'); 
				echo $this->Html->link('Тендер','#'); 
				echo $this->Html->link('Анонси','#'); 
				?>	
				</div>
				<div class='right_menu'>
					<div class='right_menu_url'>
						<?php 	echo $this->Html->link('Мій профіль','#'); ?>
					</div>
					<?php echo $this->Html->link($this->Html->tag('span','Додати фірму'),'#',array('class' => 'button_green','escape' => false)); ?>
				</div>
				</div>
			</div>
		
			<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
			</div>
			<div id="footer">
				<div id='footer_gradient'>
					<div class='menu'>
					<?php 
					echo $this->Html->link('Контакти','#'); 
					echo $this->Html->link('Ціни','#'); 
					echo $this->Html->link('Про проект','#'); 
					echo $this->Html->link('Партнери','#'); 
					?>	
					</div>
				</div>
			</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
