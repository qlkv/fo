<section id="content"> 
<section class="vbox">
				<?php
								if (!empty($project_details)) {
				foreach ($project_details as $key => $project) { ?>
	<header class="header bg-white b-b b-light">
	<p><a href="<?=base_url()?>projects/view_projects/all" class="btn btn-xs btn-dark lter">&laquo; Back</a> Project Title : <strong><?=$project->project_title?></strong></p> </header> 

	<section class="scrollable"> 
	<section class="hbox stretch"> 
	<aside class="aside-lg bg-light lter b-r"> 
	<section class="vbox"> 
	<section class="scrollable w-f">
	<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
	<div class="wrapper">
	<!-- Start -->
	<section class="panel panel-default"> 

<header class="panel-heading">Task Status</header>
<div class="panel-body text-center">
<div class="sparkline inline" data-type="pie" data-height="150" data-slice-colors="['#8EC165','#FB6B5B']">60,40</div>
<div class="line pull-in"></div> 

<div class="text-xs"> <i class="fa fa-circle text-success"></i> 60% Open <i class="fa fa-circle text-danger"></i> 40% Closed</div> 
</div> </section> 
<!-- end -->
		<div class="clearfix m-b">
		<a href="#" class="pull-left thumb m-r"> 
		<img src="<?=AVATAR_URL?><?=$this->user_profile->get_profile_details($project->client,'avatar')?>" class="img-circle"> </a>
			<div class="clear">
				<div class="h3 m-t-xs m-b-xs"><?=lang('client')?></div> 
				<small class="text-muted">
				<a class="text-info" href="<?=base_url()?>clients/view/details/<?=$project->client*1200?>">@<?=ucfirst($this->user_profile->get_profile_details($project->client,'fullname')?$this->user_profile->get_profile_details($project->client,'fullname'):$this->user_profile->get_user_details($project->client,'username'))?></a></small>
			</div>
		</div>
		<div class="panel wrapper panel-success">
			<div class="row">
				<div class="col-xs-6"> <a href="#">
					<span class="m-b-xs h4 block"><?=$this->user_profile->count_rows('comments',$array = array(
                                        					'project' => $project->project_id
                                        					)); ?></span> <small class="text-muted"><?=lang('comments')?></small> </a>
				</div>
				<div class="col-xs-6"> <a href="#">
					<span class="m-b-xs h4 block"><?=$this->user_profile->count_rows('activities',$array = array(
															'module' => 'projects',
                                        					'module_field_id' => $project->project_id
                                        					)); ?></span> <small class="text-muted"><?=lang('activities')?></small> </a>
				</div>
			</div>
		</div>

		<div>
			
			<div class="progress progress-xs progress-striped active">
			<div class="progress-bar progress-bar-info" data-toggle="tooltip" data-original-title="<?=$project->progress?>%" style="width: <?=$project->progress?>%">
			</div>
			</div>
		</div>
	</div> </div></section> </section> </aside> 
	<aside class="bg-white"> 
	<section class="vbox">
	
		<section class="scrollable w-f">
		<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
		<!-- Start Tabs -->

<ul class="nav nav-tabs" id="stats">
<li class="active"><a href="#timeline" data-toggle="tab"> Timeline </a></li>


      <li><a href="<?=base_url()?>clients/view/clientinvoices/<?=$i->id?>" data-target="#invoices" class="media_node active span" id="invoice_tab" data-toggle="tabajax" rel="tooltip"> Tasks </a></li>
      <li><a href="<?=base_url()?>clients/view/clientprojects/<?=$i->id?>" data-target="#projects" class="media_node span" id="projects_tab" data-toggle="tabajax" rel="tooltip"> Files</a></li>

      <li><a href="<?=base_url()?>clients/view/payments/<?=$i->id?>" data-target="#payments" class="media_node span" id="payments_tab" data-toggle="tabajax" rel="tooltip">Feeds</a></li>

      <li><a href="<?=base_url()?>clients/view/activities/<?=$i->id?>" data-target="#activities" class="media_node span" id="activities_tab" data-toggle="tabajax" rel="tooltip">Bugs</a></li>
</ul>
<div class="tab-content">

<div class="tab-pane active" id="timeline">
	<!-- Timeline START -->


<!-- Timeline END -->
</div> 


<div class="tab-pane" id="invoices">

      </div>
      <div class="tab-pane" id="projects">

      </div>
      <div class="tab-pane" id="payments">

      </div>
      <div class="tab-pane  urlbox span8" id="activities">

      </div>
    </div>






		<header class="header bg-light bg-gradient"> 
		<ul class="nav nav-tabs nav-white"> 
		<li class="active"><a href="#tasks" data-toggle="tab"><?=lang('tasks')?></a></li> 
		<li class=""><a href="#files" data-toggle="tab"><?=lang('files')?></a></li> 
		<li class=""><a href="#activity" data-toggle="tab"><?=lang('activities')?></a></li> 
		</ul> </header> 

	<div class="tab-content"> 

	<div class="tab-pane active" id="tasks"> 
		<ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border"> 
			<?php
				if (!empty($project_tasks)) {
				foreach ($project_tasks as $key => $task) { ?>
		<li class="list-group-item"> 
		<a href="#" class="thumb-sm pull-left m-r-sm"> <img src="<?=AVATAR_URL?><?=$this->user_profile->get_profile_details($task->added_by,'avatar')?>" class="img-circle"> </a>
			<a href="#" class="clear"> <small class="pull-right"><?php
								$today = time();
								$activity_day = strtotime($task->date_added) ;
								echo $this->user_profile->get_time_diff($today,$activity_day);
							?> ago</small> <strong class="block"><?=ucfirst($this->user_profile->get_user_details($task->added_by,'username'))?></strong> 
							<small><?=$task->task_name?></small> <div class="progress progress-xs progress-striped active">
			<div class="progress-bar progress-bar-success" data-toggle="tooltip" data-original-title="<?=$task->progress?>%" style="width: <?=$task->progress?>%">
			</div>
			</div>  </a>							
		</li> 
		
				<?php } } ?>
	 
		</ul> 
	</div> 

	<div class="tab-pane" id="files"> 

		 <section class="panel panel-default"> 

	<table class="table table-striped m-b-none text-sm"> 
		<thead> 
		<tr>
			<th>File Name</th> 
			<th></th>
		</tr> </thead>
		<tbody>
		<?php
				if (!empty($project_files)) {
				foreach ($project_files as $key => $file) { ?>
		<tr> 
			<td><?=$file->file_name?></td>
			<td><a href="<?=base_url()?>projects/download/<?=$file->file_id?>" class="btn-xs btn-info"><i class="fa fa-download"></i> Download</a> </td>
		</tr>
		<?php }} else{ ?>
				<tr>
					<td><?=lang('nothing_to_display')?></td><td></td>
				</tr>
				<?php } ?>
		</tbody> 
		</table>
		</section> 

	</div> 

		<div class="tab-pane" id="activity"> 
			<ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border"> 
			<?php
				if (!empty($project_activities)) {
				foreach ($project_activities as $key => $activity) { ?>
		<li class="list-group-item"> 
		<a href="#" class="thumb-sm pull-left m-r-sm"> <img src="<?=AVATAR_URL?><?=$this->user_profile->get_profile_details($activity->user,'avatar')?>" class="img-circle"> </a>
			<a href="#" class="clear"> <small class="pull-right"><?php
								$today = time();
								$activity_day = strtotime($activity->activity_date) ;
								echo $this->user_profile->get_time_diff($today,$activity_day);
							?> ago</small> <strong class="block"><?=ucfirst($this->user_profile->get_user_details($activity->user,'username'))?></strong> 
							<small><?=$activity->activity?></small> </a> 
		</li> 
				<?php } } ?>
	 
		</ul> 

		</div> 
	</div> 
<!-- End Tabs -->
		</div>
		</section> 
		</section> 
		</aside> 

		<aside class="col-lg-4 b-l"> 
		<?php  echo modules::run('sidebar/flash_msg');?>
		<section class="vbox"> 
		<section class="scrollable w-f">
		<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
		<div class="col-lg-12"> 
		<h4 class="font-thin padder"><?=lang('latest_comments')?></h4>
			<!-- .comment-list --> 
		<section class="comment-list block">
			<?php
					if (!empty($project_comments)) {
					foreach ($project_comments as $key => $comment) { ?>
		<article id="comment-id-1" class="comment-item">
		<a class="pull-left thumb-sm avatar"> 
		<img src="<?=AVATAR_URL?><?=$this->user_profile->get_profile_details($comment->posted_by,'avatar')?>" class="img-circle"> </a> 
		<span class="arrow left"></span> 
		<section class="comment-body panel panel-default"> 
			<header class="panel-heading bg-white">
			<a href="#"><?=ucfirst($this->user_profile->get_profile_details($comment->posted_by,'fullname')?$this->user_profile->get_profile_details($comment->posted_by,'fullname'):$this->user_profile->get_user_details($comment->posted_by,'username'))?></a>
			<?php if($comment->posted_by == $this->tank_auth->get_user_id()){ ?><label class="label bg-info m-l-xs"><?=lang('you')?></label> <?php } ?>
			<span class="text-muted m-l-sm pull-right"> <i class="fa fa-clock-o"></i> <?php
								$today = time();
								$comment_day = strtotime($comment->date_posted) ;
								echo $this->user_profile->get_time_diff($today,$comment_day);
							?> ago </span> </header>
			<div class="panel-body">
				<div><small><?=$comment->message?></small></div>		
			</div>
			</section> 
		</article> 
		<?php } }else{ ?>
				<p><?=lang('no_comment_found')?></p>
				<?php } ?>

			<!-- comment form --> 
			<article class="comment-item media" id="comment-form"> 
				<a class="pull-left thumb-sm avatar">
				<img src="<?=AVATAR_URL?><?=$this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'avatar')?>" class="img-circle"></a> 
				<section class="media-body"> 
				<?php     
			$attributes = array('class' => 'class="m-b-none"');
			echo form_open(base_url().'projects/comment?project='.$project->project_id, $attributes); ?>
			<input type="hidden" name="project_id" value="<?=$project->project_id?>">
			<input type="hidden" name="project_code" value="<?=$project->project_code?>">
					<div class="input-group"> 
					<input type="text" name="comment" class="form-control" required placeholder="<?=lang('type_comment_here')?>">
					<span class="input-group-btn">
					<button class="btn btn-primary" type="submit"><?=lang('post')?></button>
					</span> 
					</div> 
				</form> 
				</section>
			</article>
		</section> 
		</div>
		</div>
			<!-- / .comment-list --> 
		</section> 
		</section> 
		</aside> 
		<?php }} ?>
		</section> 
		</section> 
		</section> 
<a href="profile.html#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> 

</section>