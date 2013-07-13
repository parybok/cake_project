	<center>
	<div id='search'>
		<div id='search_text'>Що будемо шукати?</div>
		<div class='searсh_box'>
			<div class='menu'>
				<?php echo $this->Html->link('Тернопіль','#'); ?>
				<div class='search_lights' >
					<?php echo $this->Html->link('Розширений пошук','#',array('id'=>'search_light')); ?>
				</div>
				<div class='search_hards' style='display:none;'>
					<?php echo $this->Html->link('організації','#'); ?>
					<?php echo $this->Html->link('товари і послуги','#'); ?>
					<?php echo $this->Html->link('люди','#'); ?>
					<?php echo $this->Html->link('телефон','#'); ?>
					<?php echo $this->Html->link('адреса','#'); ?>
				</div>
				<?php echo $this->Form->input('',array('class'=>'input','value'=>'','name'=>'search','placeholder'=>'почніть набирати назву товару, фірми чи номер')); ?>
				<div class='search_hards_down' style='display:none;'>
					<?php echo $this->Html->link('Простий пошук','#',array('id'=>'search_hard')); ?>
				</div>
			</div>
		</div>
		<div class='search_content'>
			<div class='block'>
				Анонси:
				<div class='line'></div>
			</div>
			<div class='block'>
				Перші букви рубрики:
				<div class='line'></div>
					<div class='alphabet'>
						<?php for ($i=1;$i<count($alphabets);$i++) {?>
						<span id='alphabet'>
						 	<?php echo $this->Html->link($alphabets[$i],'#');
							if ($i % 6==0) echo "<br>";?>
						</span>
						<?php } ?>
					</div>
				<div class='line'></div>	

			</div>
			<div class='block'>
				Щойно шукали:
				<div class='line'></div>
			</div>
		</div>

	</div>	
</center>
