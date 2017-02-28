<?php

/**
 * @file
 * Default print module template
 *
 * @ingroup print
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $print['language']; ?>" xml:lang="<?php print $print['language']; ?>">
  <head>
    <?php print $print['head']; ?>
    <?php print $print['base_href']; ?>
    <title><?php print $print['title']; ?></title>
    <?php print $print['scripts']; ?>
    <?php print $print['sendtoprinter']; ?>
    <?php print $print['robots_meta']; ?>
    <?php print $print['favicon']; ?>
    <?php print $print['css']; ?>
    <style>
tr {}
td {padding: 2px 2px 2px 5px !important;}
.sh {width: 137px; font-weight: bold; border-right:1px solid #d3d7d9;}
.sh2 {width: 137px; font-weight: bold;}
.s1 {width: 35px;border-left:1px solid #d3d7d9;}
.s1_ {width: 35px; }
.s2 {width: 45px; border-left:1px solid #d3d7d9; }
.s3 {width: 40px; border-left:1px solid #d3d7d9; }
.s4 {width: 73px;border-left:1px solid #d3d7d9; }
.s4_ {width: 73px; }
.s5 {width: 35px; border-right: 1px solid #d3d7d9; border-left:1px solid #d3d7d9;}
.st {width: 600px;}
.st_ {font-weight:bold;}
.t1_{background-color:#f9f9f9;}

table {width: none;}

</style>
  </head>
  <body>
    <?php if (!empty($print['message'])) {
      print '<div class="print-message">'. $print['message'] .'</div><p />';
    } ?>
    <div class="print-logo"><?php print $print['logo']; ?></div>
    <p />
    <hr class="print-hr" />
    <div class="print-content">
    <?php // print $print['content']; ?>
    <?php 
    $node_wrapper = entity_metadata_wrapper('node', $node); 
    
    ?>


  <table>
    <tr><td class="st  st_"><?php  print $node->field_student_s_name['und'][0]['value']; ?> (<?php  print render(field_view_value('node', $node, 'field_student_name', $node->field_student_name[$node->language][0])); ?>)</td></tr>
    <tr><td class="st">
    	<span class="st_">
    		<?php
 				$info = field_info_instance('node','field_class','report_card');
 				print $info['label'].":";
			?>
    	</span>
    <?php  if(isset($node->field_class['und'][0]['tid'])){print render(field_view_value('node', $node, 'field_class', $node->field_class[$node->language][0]));} ?>
    </td></tr>
        	
    <tr><td class="st">
    	<span class="st_">
    		<?php
 				$info = field_info_instance('node','field_term','report_card');
 				print $info['label'].":";
			?>
    	</span>
        <?php  if(isset($node->field_term['und'][0]['tid'])){print render(field_view_value('node', $node, 'field_term', $node->field_term[$node->language][0]));} ?>
    </td></tr>
    
    <tr><td class="st">
    	<span class="st_">
    		<?php
 				$info = field_info_instance('node','field_session','report_card');
 				print $info['label'].":";
			?>
    	</span>
        <?php  if(isset($node->field_session['und'][0]['tid'])){print render(field_view_value('node', $node, 'field_session', $node->field_session[$node->language][0]));} ?>
    </td></tr>
    
    <tr><td class="st">
    	<span class="st_">
    		<?php
 				$info = field_info_instance('node','field_average_score','report_card');
 				print $info['label'].":";
			?>
    	</span>
    <?php  if(isset($node->field_average_score['und'][0]['value'])){print render(field_view_value('node', $node, 'field_average_score', $node->field_average_score[$node->language][0]));} ?>
    </td></tr>
    
    <tr><td class="st">
    	<span class="st_">
    		<?php
 				$info = field_info_instance('node','field_average_score2','report_card');
 				print $info['label'].":";
			?>
    	</span>
    <?php  if(isset($node->field_average_score2['und'][0]['value'])){print render(field_view_value('node', $node, 'field_average_score2', $node->field_average_score2[$node->language][0]));} ?>
    </td></tr>
    
    <tr><td class="st">
    	<span class="st_">
    		<?php
 				$info = field_info_instance('node','field_position','report_card');
 				print $info['label'].":";
			?>
    	</span>
    <?php  if(isset($node->field_position['und'][0]['value'])){print render(field_view_value('node', $node, 'field_position', $node->field_position[$node->language][0]));} ?>
    </td></tr>
    
    <tr><td class="st">
    	<span class="st_">
    		<?php
 				$info = field_info_instance('node','field_class_report','report_card');
 				print $info['label'].":";
			?>
    	</span>
    <?php  if(isset($node->field_class_report['und'][0]['value'])){print render(field_view_value('node', $node, 'field_class_report', $node->field_class_report[$node->language][0]));} ?>
    </td></tr>
    
    <tr><td class="st">
    	<span class="st_">
    		<?php
 				$info = field_info_instance('node','field_class_average_minimum','report_card');
 				print $info['label'].":";
			?>
    	</span>
    <?php  if(isset($node->field_class_average_minimum['und'][0]['value'])){print render(field_view_value('node', $node, 'field_class_average_minimum', $node->field_class_average_minimum[$node->language][0])); echo "|";} ?>
    
	<span class="st_">
    		<?php
 				$info = field_info_instance('node','field_class_average_maximum','report_card');
 				print $info['label'].":";
			?>
    	</span>
    <?php  if(isset($node->field_class_average_maximum['und'][0]['value'])){print render(field_view_value('node', $node, 'field_class_average_maximum', $node->field_class_average_maximum[$node->language][0])); echo "|";} ?>
    
	<span class="st_">
    		<?php
 				$info = field_info_instance('node','field_class_average_average','report_card');
 				print $info['label'].":";
			?>
    	</span>
    <?php  if(isset($node->field_class_average_average['und'][0]['value'])){print render(field_view_value('node', $node, 'field_class_average_average', $node->field_class_average_average[$node->language][0]));} ?>
    
    
    
    </td></tr>

  </table>
<br>
    

<table>
   <?php if (isset($node->field_header['und'][0]['value'])) { ?>
    <tr class="t1_">
        <td class="sh2">Subjects</td>

        <td class="s1_ st_"><?php  print $node_wrapper->field_header->field_header_ca_score->value(); ?></td>
        <td class="s1_ st_"><?php  print $node_wrapper->field_header->field_header_ca_score2->value(); ?></td>
        <td class="s1_ st_"><?php  print $node_wrapper->field_header->field_header_exam_score->value(); ?></td>
        
        <td class="s1_ st_"><?php  print $node_wrapper->field_header->field_header_total_score->value(); ?></td>
        <td class="s1_ st_"><?php  print $node_wrapper->field_header->field_header_previous_score->value(); ?></td>
        <td class="s1_ st_"><?php  print $node_wrapper->field_header->field_header_stanine_grade->value(); ?></td>
        
        <td class="s1_ st_"><?php  print $node_wrapper->field_header->field_header_average->value(); ?></td>
        <td class="s4_ st_"><?php  print $node_wrapper->field_header->field_header_remark->value(); ?></td>
        <td class="s1_ st_"><?php  print $node_wrapper->field_header->field_header_teacher_s_initial->value(); ?></td>

    </tr>                    
    <?php } ?>
  </table>
  <table>  
	<?php if (isset($node->field_biology['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Biology</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_biology->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_biology->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_biology->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_biology->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_biology->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_biology->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_biology->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_biology->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_biology->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
      <?php if (isset($node->field_arabic_language['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Arabic Language</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_arabic_language->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_arabic_language->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_arabic_language->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_arabic_language->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_arabic_language->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_arabic_language->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_arabic_language->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_arabic_language->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_arabic_language->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_agric_science['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Agric Science</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_agric_science->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_agric_science->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_agric_science->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_agric_science->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_agric_science->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_agric_science->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_agric_science->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_agric_science->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_agric_science->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_basic_science['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Basic Science</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_basic_science->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_basic_science->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_basic_science->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_basic_science->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_basic_science->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_basic_science->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_basic_science->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_basic_science->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_basic_science->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_basic_technology['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Basic Technology</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_basic_technology->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_basic_technology->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_basic_technology->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_basic_technology->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_basic_technology->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_basic_technology->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_basic_technology->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_basic_technology->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_basic_technology->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_business_studies['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Business Studies</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_business_studies->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_business_studies->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_business_studies->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_business_studies->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_business_studies->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_business_studies->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_business_studies->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_business_studies->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_business_studies->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_chemistry['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Chemistry</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_chemistry->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_chemistry->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_chemistry->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_chemistry->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_chemistry->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_chemistry->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_chemistry->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_chemistry->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_chemistry->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_civic_education['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Civic Education</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_civic_education->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_civic_education->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_civic_education->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_civic_education->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_civic_education->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_civic_education->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_civic_education->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_civic_education->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_civic_education->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_commerce['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Commerce</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_commerce->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_commerce->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_commerce->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_commerce->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_commerce->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_commerce->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_commerce->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_commerce->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_commerce->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_computer_studies['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Computer Studies</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_computer_studies->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_computer_studies->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_computer_studies->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_computer_studies->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_computer_studies->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_computer_studies->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_computer_studies->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_computer_studies->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_computer_studies->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_cultural_creative_arts['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Cultural Creative Arts</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_cultural_creative_arts->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_cultural_creative_arts->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_cultural_creative_arts->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_cultural_creative_arts->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_cultural_creative_arts->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_cultural_creative_arts->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_cultural_creative_arts->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_cultural_creative_arts->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_cultural_creative_arts->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_data_processing['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Data Processing</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_data_processing->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_data_processing->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_data_processing->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_data_processing->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_data_processing->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_data_processing->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_data_processing->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_data_processing->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_data_processing->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_dyeing_and_bleaching['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Dyeing and Bleaching</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_dyeing_and_bleaching->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_dyeing_and_bleaching->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_dyeing_and_bleaching->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_dyeing_and_bleaching->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_dyeing_and_bleaching->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_dyeing_and_bleaching->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_dyeing_and_bleaching->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_dyeing_and_bleaching->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_dyeing_and_bleaching->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_economics['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Economics</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_economics->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_economics->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_economics->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_economics->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_economics->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_economics->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_economics->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_economics->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_economics->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_english_language['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">English Language</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_english_language->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_english_language->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_english_language->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_english_language->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_english_language->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_english_language->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_english_language->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_english_language->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_english_language->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_financial_accounting['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Financial Accounting</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_financial_accounting->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_financial_accounting->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_financial_accounting->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_financial_accounting->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_financial_accounting->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_financial_accounting->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_financial_accounting->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_financial_accounting->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_financial_accounting->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_french['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">French</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_french->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_french->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_french->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_french->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_french->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_french->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_french->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_french->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_french->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_further_mathematics['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Further Mathematics</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_further_mathematics->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_further_mathematics->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_further_mathematics->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_further_mathematics->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_further_mathematics->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_further_mathematics->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_further_mathematics->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_further_mathematics->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_further_mathematics->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>

  <?php if (isset($node->field_geography['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Geography</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_geography->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_geography->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_geography->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_geography->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_geography->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_geography->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_geography->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_geography->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_geography->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_government['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Government</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_government->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_government->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_government->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_government->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_government->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_government->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_government->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_government->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_government->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_health_science['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Health Science</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_health_science->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_health_science->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_health_science->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_health_science->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_health_science->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_health_science->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_health_science->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_health_science->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_health_science->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_home_economics['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Home Economics</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_home_economics->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_home_economics->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_home_economics->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_home_economics->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_home_economics->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_home_economics->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_home_economics->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_home_economics->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_home_economics->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_irs['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">IRS</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_irs->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_irs->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_irs->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_irs->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_irs->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_irs->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_irs->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_irs->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_irs->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_lit_in_english['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Lit. In English</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_lit_in_english->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_lit_in_english->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_lit_in_english->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_lit_in_english->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_lit_in_english->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_lit_in_english->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_lit_in_english->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_lit_in_english->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_lit_in_english->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_marketing['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Marketing</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_marketing->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_marketing->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_marketing->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_marketing->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_marketing->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_marketing->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_marketing->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_marketing->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_marketing->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_mathematics['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Mathematics</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_mathematics->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_mathematics->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_mathematics->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_mathematics->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_mathematics->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_mathematics->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_mathematics->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_mathematics->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_mathematics->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_phonetics['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Phonetics</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_phonetics->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_phonetics->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_phonetics->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_phonetics->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_phonetics->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_phonetics->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_phonetics->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_phonetics->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_phonetics->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_physical_health_edu_['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Physical Health Edu.</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_physical_health_edu_->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_physical_health_edu_->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_physical_health_edu_->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_physical_health_edu_->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_physical_health_edu_->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_physical_health_edu_->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_physical_health_edu_->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_physical_health_edu_->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_physical_health_edu_->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_physics['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Physics</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_physics->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_physics->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_physics->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_physics->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_physics->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_physics->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_physics->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_physics->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_physics->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_practical_agriculture['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Practical Agriculture</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_practical_agriculture->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_practical_agriculture->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_practical_agriculture->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_practical_agriculture->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_practical_agriculture->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_practical_agriculture->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_practical_agriculture->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_practical_agriculture->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_practical_agriculture->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_quantitative_reasoning['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Quantitative Reasoning</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_quantitative_reasoning->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_quantitative_reasoning->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_quantitative_reasoning->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_quantitative_reasoning->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_quantitative_reasoning->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_quantitative_reasoning->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_quantitative_reasoning->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_quantitative_reasoning->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_quantitative_reasoning->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_quran_memorization['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Quran Memorization</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_quran_memorization->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_quran_memorization->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_quran_memorization->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_quran_memorization->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_quran_memorization->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_quran_memorization->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_quran_memorization->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_quran_memorization->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_quran_memorization->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_rhyme_['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Rhyme</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_rhyme_->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_rhyme_->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_rhyme_->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_rhyme_->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_rhyme_->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_rhyme_->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_rhyme_->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_rhyme_->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_rhyme_->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_science_technology['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Science & Technology</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_science_technology->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_science_technology->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_science_technology->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_science_technology->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_science_technology->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_science_technology->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_science_technology->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_science_technology->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_science_technology->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_social_studies['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Social Studies</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_social_studies->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_social_studies->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_social_studies->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_social_studies->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_social_studies->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_social_studies->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_social_studies->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_social_studies->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_social_studies->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_technical_drawing['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Technical Drawing</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_technical_drawing->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_technical_drawing->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_technical_drawing->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_technical_drawing->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_technical_drawing->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_technical_drawing->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_technical_drawing->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_technical_drawing->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_technical_drawing->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_verbal_reasoning['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Verbal Reasoning</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_verbal_reasoning->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_verbal_reasoning->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_verbal_reasoning->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_verbal_reasoning->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_verbal_reasoning->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_verbal_reasoning->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_verbal_reasoning->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_verbal_reasoning->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_verbal_reasoning->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_vocational_aptitude['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Vocational Aptitude</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_vocational_aptitude->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_vocational_aptitude->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_vocational_aptitude->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_vocational_aptitude->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_vocational_aptitude->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_vocational_aptitude->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_vocational_aptitude->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_vocational_aptitude->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_vocational_aptitude->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_writing['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Writing</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_writing->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_writing->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_writing->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_writing->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_writing->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_writing->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_writing->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_writing->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_writing->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_yoruba['und'][0]['value'])) { ?>
    <tr class="t1">
        <td class="sh">Yoruba</td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_yoruba->field_ca_1st_->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_yoruba->field_ca_2->value(); ?></td>

        <td class="s1">&nbsp;<?php  print $node_wrapper->field_yoruba->field_exam_1st_->value(); ?></td>
        <td class="s5">&nbsp;<?php  print $node_wrapper->field_yoruba->field_total_1_st_->value(); ?></td>
        
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_yoruba->field_previous_score->value(); ?></td>
  
        <td class="s2">&nbsp;<?php  print $node_wrapper->field_yoruba->field_stanine_grade->value(); ?></td>
        <td class="s3">&nbsp;<?php  print $node_wrapper->field_yoruba->field_subject_average_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_yoruba->field_remark->value(); ?></td>
        <td class="s1">&nbsp;<?php  print $node_wrapper->field_yoruba->field_teacher_s_initial->value(); ?></td>
      </tr>                    
    <?php } ?>
  </table>
  
      <table>
    <?php if (isset($node->field_psychometric_skills['und'][0]['value'])) { ?>
    <tr class="t1">        
        <td class="s4">&nbsp;Handwriting</td>
        <td class="s4">&nbsp;Verbal Fluency</td>

        <td class="s4">&nbsp;Games</td>
        <td class="s4">&nbsp;Sports</td>
        
        <td class="s4">&nbsp;Handling Tools</td>

        <td class="s4">&nbsp;Drawing & Paint</td>
        <td class="s4">&nbsp;Quran Mem.</td>
      </tr>
      <tr class="t1">        
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_psychometric_skills->field_psychometric_handwriting->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_psychometric_skills->field_psychometric_verbal_fluenc->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_psychometric_skills->field_psychometric_games->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_psychometric_skills->field_psychometric_sports->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_psychometric_skills->field_psychometric_handling_tool->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_psychometric_skills->field_psychometric_drawing_paint->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_psychometric_skills->field_psychometric_musical_skill->value(); ?></td>
      </tr>     
  </table>

	<table>                    
  <?php } ?>
    <?php if (isset($node->field_affective_areas['und'][0]['value'])) { ?>
   
    <tr class="t1">        
        <td class="s4">&nbsp;Punctuality</td>
        <td class="s4">&nbsp;Neatness</td>
        <td class="s4">&nbsp;Politeness</td>
        <td class="s4">&nbsp;Honesty</td>
        <td class="s4">&nbsp;Cooperation With Others</td>
        <td class="s4">&nbsp;Leadership Traits</td>
        <td class="s4">&nbsp;Helping Others</td>
        <td class="s4">&nbsp;Emotional Stability</td>
        <td class="s4">&nbsp;Health</td>
        <td class="s4">&nbsp;Attitude In School Work</td>
        <td class="s4">&nbsp;Attentiveness</td>
        <td class="s4">&nbsp;Perseverance</td>
        <td class="s4">&nbsp;Speaking/Handwriting</td>
	</tr> 
        <tr class="t1">        
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_affective_areas->field_affective_areas_punctualit->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_affective_areas->field_affective_areas_neatness->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_affective_areas->field_affective_areas_politeness->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_affective_areas->field_affective_areas_honesty->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_affective_areas->field_cooperation_with_others->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_affective_areas->field_affective_areas_leadership->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_affective_areas->field_affective_areas_helping_ot->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_affective_areas->field_affective_areas_emotional_->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_affective_areas->field_affective_areas_health->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_affective_areas->field_affective_areas_attitude_i->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_affective_areas->field_affective_areas_attentiven->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_affective_areas->field_affective_areas_perseveran->value(); ?></td>
        <td class="s4">&nbsp;<?php  print $node_wrapper->field_affective_areas->field_affective_areas_speaking_h->value(); ?></td>

      </tr>                    
    <?php } ?>
  </table>
  <table> 

    <tr><td class="st">Teacher's Comment: 
      <?php  if(isset($node->teacher_s_comment['und'][0]['value'])){print render(field_view_value('node', $node, 'teacher_s_comment', $node->teacher_s_comment[$node->language][0]));} ?>
    </td></tr>
    <tr><td class="st">Principal's Comment: 
      <?php  if(isset($node->principal_s_comment['und'][0]['value'])){print render(field_view_value('node', $node, 'principal_s_comment', $node->principal_s_comment[$node->language][0]));} ?>
    </td></tr>
    <tr><td class="st">Session Card: 
      <?php  if(isset($node->field_report_card_reference['und'][0]['value'])){print render(field_view_value('node', $node, 'field_report_card_reference', $node->field_report_card_reference[$node->language][0]));} ?>
    </td></tr>

  </table>

    
    </div>
    <div class="print-footer"><?php print $print['footer_message']; ?></div>
    <hr class="print-hr" />
    <div class="print-source_url"><?php print $print['source_url']; ?></div>
    <div class="print-links"><?php print $print['pfp_links']; ?></div>
    <?php print $print['footer_scripts']; ?>
    <span style="text-align:center;">Powered by <a href="http://www.acada360.xyz" target="_blank">Acada360</a></span>
  </body>
</html>
