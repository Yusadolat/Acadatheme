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
        .st_{font-weight:bold;}
        .st_2{color: #d00;}
    	.ptitle{font-size:15px;}
        .bscore{font-size:10px;}
        .st2{width: 225px;}
        .tb1 tbody{border: none;}
        .st_1{border-bottom: 1px solid; padding: 0 1em;}
        .s2 { vertical-align: 3px;padding:12px;width:25%;}
        .s2 td{padding:3px;}
        table tbody {border: none;}
        .blogo{padding: 5px;}
        .print-site_name{font-weight:bold; font-size: 13px;}
        .logo img{max-width: 250px;}
        body{border-top: 8px solid #4565be; font-size: 11.5px;}
        .st td { padding: 2px;}
    </style>
  </head>
  <body>
    <?php if (!empty($print['message'])) {
      // print '<div class="print-message">'. $print['message'] .'</div><p />';
    } ?>
    <table>
        <tr>
            <td class="logo"><div class="print-logo"><?php print $print['logo']; ?></div></td>
            <td class="blogo"><div class="print-site_name"><?php print  $print['site_name']; ?></div><br><div class="print-footer"><?php print $print['footer_message']; ?></div></td>
        </tr>
    </table>



    <p />
    <div class="print-breadcrumb"><?php // print $print['breadcrumb']; ?></div>
    <hr class="print-hr" />
    <div class="print-content">
    
    <?php
     //dpm($node);
     //print "<span class='ptitle st_'>".$node->title."</span>";
     ?>
    
     <?php //fields start here with the Student Name ?>
    <?php  if(isset($node->field_student_s_name['und'][0]['value'])){ ?>
        <span class="st_">
            <?php
                $info = field_info_instance('node','field_student_s_name','term_report_card');
                print $info['label'].":";
            ?>
        </span> 
        <?php   print render(field_view_value('node', $node, 'field_student_s_name', $node->field_student_s_name[$node->language][0]));
    } ?>

     <?php //All the fields above scores  reference are now to be set in a table ?>
    <table class="tb1">
        <tr>
            <td class="st2">
                <span class="st_">
                    <?php
                        $info = field_info_instance('node','field_class','term_report_card');
                        print $info['label'].":";
                    ?>
                </span>
                <span class="st_1"> 
                    <?php  if(isset($node->field_class['und'][0]['tid'])){ 
                        print render(field_view_value('node', $node, 'field_class', $node->field_class[$node->language][0]));
                    } ?>
                </span>
            </td>

            <td class="st2">
                <span class="st_">
                    <?php
                        $info = field_info_instance('node','field_term','term_report_card');
                        print $info['label'].":";
                    ?>
                </span>
                <span class="st_1">  
                    <?php  if(isset($node->field_term['und'][0]['tid'])){    
                        print render(field_view_value('node', $node, 'field_term', $node->field_term[$node->language][0]));
                    } ?>
                </span> 
            </td>

            <td class="st2">
                <span class="st_">
                    <?php
                        $info = field_info_instance('node','field_session','term_report_card');
                        print $info['label'].":";
                    ?>
                </span> 
                <span class="st_1">
                    <?php  if(isset($node->field_session['und'][0]['tid'])){ 
                        print render(field_view_value('node', $node, 'field_session', $node->field_session[$node->language][0]));
                    } ?>
                </span>
            </td>
        </tr>

        <tr>
            <td class="st2">
                <span class="st_">
                    <?php
                        $info = field_info_instance('node','field_my_term_average','term_report_card');
                        print $info['label'].":";
                    ?>
                </span>
                <span class="st_1"> 
                    <?php  if(isset($node->field_my_term_average['und'][0]['value'])){
                        print render(field_view_value('node', $node, 'field_my_term_average', $node->field_my_term_average[$node->language][0]));
                    } ?>
                </span>
            </td>

            <td class="st2">
                <span class="st_">
                    <?php
                        $info = field_info_instance('node','field_position','term_report_card');
                        print $info['label'].":";
                    ?>
                </span>
                <span class="st_1"> 
                    <?php  if(isset($node->field_position['und'][0]['value'])){
                        print render(field_view_value('node', $node, 'field_position', $node->field_position[$node->language][0]));
                    } ?>
                </span>
            </td>

            <td class="st2">
                <span class="st_">
                    <?php
                        $info = field_info_instance('node','field_no_of_subjects2','term_report_card');
                        print $info['label'].":";
                    ?>
                </span> 
                <span class="st_1"> 
                    <?php  if(isset($node->field_no_of_subjects2['und'][0]['value'])){
                        print render(field_view_value('node', $node, 'field_no_of_subjects2', $node->field_no_of_subjects2[$node->language][0]));
                    } ?>
                <span>
            </td>
        </tr>
        <tr>
            <td class="st2">
                <span class="st_">
                    <?php
                        $info = field_info_instance('node','field_class_average_minimum','term_report_card');
                        print $info['label'].":";
                    ?>
                </span>
                <span class="st_1"> 
                    <?php  if(isset($node->field_class_average_minimum['und'][0]['value'])){
                        print render(field_view_value('node', $node, 'field_class_average_minimum', $node->field_class_average_minimum[$node->language][0]));
                    } ?>
                </span>
            </td>
            <td class="st2">
                <span class="st_">
                    <?php
                        $info = field_info_instance('node','field_class_average_maximum','term_report_card');
                        print $info['label'].":";
                    ?>
                </span>
                <span class="st_1"> 
                    <?php  if(isset($node->field_class_average_maximum['und'][0]['value'])){
                        print render(field_view_value('node', $node, 'field_class_average_maximum', $node->field_class_average_maximum[$node->language][0]));
                    } ?>
                </span>
            </td>
            <td class="st2">
                <span class="st_">
                    <?php
                        $info = field_info_instance('node','field_class_average_average','term_report_card');
                        print $info['label'].":";
                    ?>
                </span>
                <span class="st_1"> 
                    <?php  if(isset($node->field_class_average_average['und'][0]['value'])){
                        print render(field_view_value('node', $node, 'field_class_average_average', $node->field_class_average_average[$node->language][0]));
                    } ?>
                </span>
            </td>
        </tr>
        <tr>
            <td class="st2">
                <span class="st_">
                    <?php
                        $info = field_info_instance('node','field_class_report','term_report_card');
                        print $info['label'].":";
                    ?>
                </span>
                <span class="st_1">
                    <?php  if(isset($node->field_class_report['und'][0]['safe_value'])){
                        print render(field_view_value('node', $node, 'field_class_report', $node->field_class_report[$node->language][0]));
                    } ?>
                </span>
            </td>
            <td class="st2">
                <span class="st_">
                    <?php
                        $info = field_info_instance('node','field_no_of_times_school_opened','term_report_card');
                        print $info['label'].":";
                    ?>
                </span>
                <span class="st_1">
                    <?php  if(isset($node->field_no_of_times_school_opened['und'][0]['safe_value'])){
                        print render(field_view_value('node', $node, 'field_no_of_times_school_opened', $node->field_no_of_times_school_opened[$node->language][0]));
                    } ?>
                </span>
            </td>
            <td class="st2">
                <span class="st_">
                    <?php
                        $info = field_info_instance('node','field_no_of_times_absent','term_report_card');
                        print $info['label'].":";
                    ?>
                </span>
                <span class="st_1">
                    <?php  if(isset($node->field_no_of_times_absent['und'][0]['safe_value'])){
                        print render(field_view_value('node', $node, 'field_no_of_times_absent', $node->field_no_of_times_absent[$node->language][0]));
                    } ?>
                </span>
            </td>
        </tr>
    </table>
</br></br>
    <table>
    
    <tr><td class="st">
    <?php  if(isset($node->field_scores_reference['und'][0]['vname'])){  
    	print render(field_view_value('node', $node, 'field_scores_reference', $node->field_scores_reference[$node->language][0]));
    } ?>
    </td></tr>
    </table>

    <table>
        <tr class="bscore">
            <td class="s2">
                <span class="st_ st_2">
                    <?php
                        $info = field_info_instance('node','field_psychomotor_skills','term_report_card');
                        print $info['label']."<br>";
                    ?>
                </span>
                <?php  if(isset($node->field_psychomotor_skills['und'][0]['vname'])){  
                    print render(field_view_value('node', $node, 'field_psychomotor_skills', $node->field_psychomotor_skills[$node->language][0]));
                } ?>
            </td>

            <td class="s2">
                <?php  if(isset($node->field_scale['und'][0]['moddelta'])){  
                    $block = block_load('block', '9');      
                    $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));        
                    print $output; 
                } ?>
            </td>

            <td class="s2">
                <span class="st_ st_2">
                    <?php
                        $info = field_info_instance('node','field_affective_skills','term_report_card');
                        print $info['label']."<br>";
                    ?>
                </span>
                <?php  if(isset($node->field_affective_skills['und'][0]['vname'])){  
                    print render(field_view_value('node', $node, 'field_affective_skills', $node->field_affective_skills[$node->language][0]));
                } ?>
            </td>

            <td class="s2">
                <span class="st_ st_2">
                    <?php
                        $info = field_info_instance('node','field_stanine_scale','term_report_card');
                        print $info['label']."<br>";
                    ?>
                </span>
                <?php  if(isset($node->field_stanine_scale['und'][0]['vname'])){  
                    print render(field_view_value('node', $node, 'field_stanine_scale', $node->field_stanine_scale[$node->language][0]));
                } ?>
            </td>
        </tr>
    </table>
<hr class="print-hr">
    <table>
    <tr><td class="st">
        <span class="st_">
            <?php
                $info = field_info_instance('node','field_teacher_s_comment','term_report_card');
                print $info['label'].":";
            ?>
        </span> 
        <?php  if(isset($node->field_teacher_s_comment['und'][0]['safe_value'])){
    	   print render(field_view_value('node', $node, 'field_teacher_s_comment', $node->field_teacher_s_comment[$node->language][0]));
        } ?>
    </td></tr>    
    
    <tr><td class="st">
        <span class="st_">
            <?php
                $info = field_info_instance('node','field_principal_s_comment','term_report_card');
                print $info['label'].":";
            ?>
        </span> 
        <?php  if(isset($node->field_principal_s_comment['und'][0]['safe_value'])){
        	print render(field_view_value('node', $node, 'field_principal_s_comment', $node->field_principal_s_comment[$node->language][0]));
        } ?>
    </td></tr> 

    <tr><td class="st">
        <span class="st_ st_2">
            <?php
                $info = field_info_instance('node','field_next_term_begins','term_report_card');
                print $info['label'].":";
            ?>
        </span> 
        <?php  if(isset($node->field_next_term_begins['und'][0]['safe_value'])){
            print render(field_view_value('node', $node, 'field_next_term_begins', $node->field_next_term_begins[$node->language][0]));
        } ?>
    </td></tr>    
    
    </table>
    
    <?php // print $print['content']; ?>
    
    </div>
    <div class="print-footer"><?php // print $print['footer_message']; ?></div>
    <hr class="print-hr" />
    <div class="print-source_url"><?php print $print['source_url']; ?></div>
    <div class="print-links"><?php print $print['pfp_links']; ?></div>
    <?php print $print['footer_scripts']; ?>
    <span style="text-align:center;">Powered by <a href="http://www.acada360.xyz" target="_blank">Acada360</a></span>
  </body>
</html>
