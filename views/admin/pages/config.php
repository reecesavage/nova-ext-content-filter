<?php echo text_output($title, 'h1', 'page-head');?>

<?php echo form_open('extensions/nova_ext_content_filter/Manage/config/');?>
         

         <p>Max Level Setting</p>
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
						<td>
							<input type="radio" value="0" name="language" class="language" id="language_0" <?=$jsons['setting']['language']==0?'checked':''?>>No swearing permitted.
						</td>
						<td class="">
							<input type="radio" value="1" name="language" class="language" id="language_1" <?=$jsons['setting']['language']==1?'checked':''?> >Infrequent, mild swearing is permitted.
						</td>
						<td class="">
							<input type="radio" value="2" name="language" class="language" id="language_2" <?=$jsons['setting']['language']==2?'checked':''?>>Swearing is permitted, with some limitations.
						</td>
						<td class="">
							<input type="radio" value="3" name="language" class="language" id="language_3" <?=$jsons['setting']['language']==3?'checked':''?>>Swearing and mature language is permitted.
						</td>
					</tr>


					<tr>
						<td>
							Sex
						</td>
						<td>
							<input type="radio" value="0" name="sex" class="sex" id="sex_0" <?=$jsons['setting']['sex']==0?'checked':''?>>No sexual content is permitted.
						</td>
						<td class="">
							<input type="radio" value="1" name="sex" class="sex" id="sex_1" <?=$jsons['setting']['sex']==1?'checked':''?>>Mild sexual innuendo and references permitted.
						</td>
						<td class="">
							<input type="radio" value="2" name="sex" class="sex" id="sex_2" <?=$jsons['setting']['sex']==2?'checked':''?>>Sexual content is permitted, with some limitations.
						</td>
						<td class="">
							<input type="radio" value="3" name="sex" class="sex" id="sex_3" <?=$jsons['setting']['sex']==3?'checked':''?>>Sexual content may be described in detail.
						</td>
					</tr>




					<tr>
						<td>
							Violence
						</td>
						<td>
							<input type="radio" value="0" name="violence" class="violence" id="violence_0" <?=$jsons['setting']['violence']==0?'checked':''?> >No Violence is permitted.
						</td>
						<td class="">
							<input type="radio" value="1" name="violence" class="violence" id="violence_1" <?=$jsons['setting']['violence']==1?'checked':''?>>Mild Violence permitted.
						</td>
						<td class="">
							<input type="radio" value="2" name="violence" class="violence" id="violence_2" <?=$jsons['setting']['violence']==2?'checked':''?>>Violence is permitted, with some limitations.
						</td>
						<td class="">
							<input type="radio" value="3" name="violence" class="violence" id="violence_3" <?=$jsons['setting']['violence']==3?'checked':''?>>Explicit violence is permitted.
						</td>
					</tr>
									
								
				</tbody>
			</table>
         




         <p>Default Level Setting</p>
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
						<td>
							<input type="radio" value="0" name="default_language" class="default_language" id="default_language_0" <?=$jsons['default']['language']==0?'checked':''?>>No swearing permitted.
						</td>
						<td class="">
							<input type="radio" value="1" name="default_language" class="default_language" id="default_language_1" <?=$jsons['default']['language']==1?'checked':''?> >Infrequent, mild swearing is permitted.
						</td>
						<td class="">
							<input type="radio" value="2" name="default_language" class="default_language" id="default_language_2" <?=$jsons['default']['language']==2?'checked':''?>>Swearing is permitted, with some limitations.
						</td>
						<td class="">
							<input type="radio" value="3" name="default_language" class="default_language" id="default_language_3" <?=$jsons['default_']['language']==3?'checked':''?>>Swearing and mature language is permitted.
						</td>
					</tr>


					<tr>
						<td>
							Sex
						</td>
						<td>
							<input type="radio" value="0" name="default_sex" class="default_sex" id="default_sex_0" <?=$jsons['default']['sex']==0?'checked':''?>>No sexual content is permitted.
						</td>
						<td class="">
							<input type="radio" value="1" name="default_sex" class="default_sex" id="default_sex_1" <?=$jsons['default']['sex']==1?'checked':''?>>Mild sexual innuendo and references permitted.
						</td>
						<td class="">
							<input type="radio" value="2" name="default_sex" class="default_sex" id="default_sex_2" <?=$jsons['default']['sex']==2?'checked':''?>>Sexual content is permitted, with some limitations.
						</td>
						<td class="">
							<input type="radio" value="3" name="default_sex" class="default_sex" id="default_sex_3" <?=$jsons['default']['sex']==3?'checked':''?>>Sexual content may be described in detail.
						</td>
					</tr>




					<tr>
						<td>
							Violence
						</td>
						<td>
							<input type="radio" value="0" name="default_violence" class="default_violence" id="default_violence_0" <?=$jsons['default']['violence']==0?'checked':''?> >No Violence is permitted.
						</td>
						<td class="">
							<input type="radio" value="1" name="default_violence" class="default_violence" id="default_violence_1" <?=$jsons['default']['violence']==1?'checked':''?>>Mild Violence permitted.
						</td>
						<td class="">
							<input type="radio" value="2" name="default_violence" class="default_violence" id="default_violence_2" <?=$jsons['default']['violence']==2?'checked':''?>>Violence is permitted, with some limitations.
						</td>
						<td class="">
							<input type="radio" value="3" name="default_violence" class="default_violence" id="default_violence_3" <?=$jsons['default']['violence']==3?'checked':''?>>Explicit violence is permitted.
						</td>
					</tr>
									
								
				</tbody>
			</table>
         


		
			<br>
		
			<br>
			<button name="submit" type="submit" class="button-main" value="Submit"><span>Submit</span></button>
<?php echo form_close(); ?>




<?php if(!empty($fields)){ ?>
<?php echo form_open('extensions/nova_ext_content_filter/Manage/config/');?>
        

			<p>
				<kbd>Database Columns Missing - This is expected if it is the first time you have used this Extension or an update has produced a change. Click the Create Column button below for each missing column or check the README file for manual instructions.</kbd>
				<select name="attribute">
				<?php foreach($fields as $key=>$field){?>
                  <option value="<?=$field?>"><?=$field?></option>
				<?php }?>
				</select>
			</p>

			<br>
			<button name="submit" type="submit" class="button-main" value="Add"><span>Create Column</span></button>
<?php echo form_close(); ?>
<?php } else { ?>
   <div><br>All expected columns found in the database</div>
    
<?php } ?>


<?php if(empty($feed)){ ?>

	<?php echo form_open('extensions/nova_ext_content_filter/Manage/config/');?>
	<br>
	<div>Rss Feed Configuration Missing or Updated - This is expected if it is the first time you have used this Extension or an update has produced a change. Click the button below to modify your application/controlers/feed.php file or check the README file for manual instructions.</div>
	<br>
     
	<button name="submit" type="submit" class="button-main" value="feed"><span>Update Controller Configuration</span></button>


	<?php echo form_close(); ?>
<?php } else { ?>
   <div class="email-message"><br>Rss Feed located, and up to date.</div>
<?php } ?>

<script>

$(document).ready(function () {


  $(".default_language").click(function () {

    var lan= $('.language:checked').val();

    var deflan= $(this).val();
	if(lan<deflan)
	{
	 $(this).prop('checked',false);
	 alert('Default language can not be greater than max level');
	}

  });






  $(".default_sex").click(function () {

    var sex= $('.sex:checked').val();

    var defsex= $(this).val();
	if(sex<defsex)
	{
	 $(this).prop('checked',false);
	 alert('Default sex can not be greater than max level');
	}

  });
  $(".default_violence").click(function () {

    var vio= $('.violence:checked').val();

    var defvio= $(this).val();
	if(vio<defvio)
	{
	 $(this).prop('checked',false);
	 alert('Default violence can not be greater than max level');
	}

  });








  $(".language").click(function () {

    var deflan= $('.default_language:checked').val();

    var lan= $(this).val();
	if(lan<deflan)
	{
	 $('.default_language').prop('checked',false);
	
	}

  });






  $(".sex").click(function () {

    var defsex= $('.default_sex:checked').val();

    var sex= $(this).val();
	if(sex<defsex)
	{
	 $('.default_sex').prop('checked',false);
	
	}

  });
  $(".violence").click(function () {

    var defvio= $('.default_violence:checked').val();

    var vio= $(this).val();
	if(vio<defvio)
	{
	 $('.default_violence').prop('checked',false);
	
	}

  });

   });



</script>




