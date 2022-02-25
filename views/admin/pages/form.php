<table class="table100 zebra">
           	<thead>
           		<tr>
           		<th></th>
           		<th>0</th>
           		<th>1</th>
           		<th>2</th>
           		<th>3</th>
           	</tr>

           	</thead>
				<tbody>
					
					<tr>
						<td>
							Language
						</td>
						
	

       <?php  for($i=0;$i<=3;$i++)
   		{
   		?><td>
	<?php echo form_radio($language['name'][$i], $language['value'][$i], $language['checked'][$i],$language['disable'][$i]) .' '. form_label($language['label'][$i], 'language');?>

	</td>

 <?php } ?>

						
						
					</tr>


					<tr>
						<td>
							Sex
						</td>
						

						<?php  for($i=0;$i<=3;$i++)
   		{
   		?><td>
	<?php echo form_radio($sex['name'][$i], $sex['value'][$i], $sex['checked'][$i],$sex['disable'][$i]) .' '. form_label($sex['label'][$i], 'sex');?>

	</td>

 <?php } ?>
					</tr>




					<tr>
						<td>
							Violence
						</td>
						<?php  for($i=0;$i<=3;$i++)
   		{
   		?><td>
	<?php echo form_radio($violence['name'][$i], $violence['value'][$i], $violence['checked'][$i],$violence['disable'][$i]) .' '. form_label($violence['label'][$i], 'violence');?>

	</td>

 <?php } ?>
					</tr>
									
								
				</tbody>
			</table>
         


