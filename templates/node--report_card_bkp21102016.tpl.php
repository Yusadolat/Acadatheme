<?php

/**
 * @file
 * Bartik's theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
?>
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

table {width: none;}

</style>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>>
      <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
    </h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="meta submitted">
      <?php print $user_picture; ?>
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <div class="content clearfix"<?php print $content_attributes; ?>>
  <table>
    <tr><td class="st  st_"><?php  print render($content['field_student_s_name'][0]['#markup']); ?> (<?php  print render($content['field_student_name'][0]['#markup']); ?>)</td></tr>
    <tr><td class="st"><span class="st_">Class: </span><?php  print render($content['field_class'][0]['#markup']); ?></td></tr>
    <tr><td class="st"><span class="st_">Term: </span><?php  print render($content['field_term'][0]['#markup']); ?></td></tr>
    <tr><td class="st"><span class="st_">Session: </span><?php  print render($content['field_session'][0]['#markup']); ?></td></tr>
    <tr><td class="st"><span class="st_">No of Subjects: </span><?php  print render($content['field_average_score'][0]['#markup']); ?></td></tr>
    <tr><td class="st"><span class="st_">Average Score: </span><?php  print render($content['field_average_score2'][0]['#markup']); ?></td></tr>
    <tr><td class="st"><span class="st_">Position: </span><?php  print render($content['field_position'][0]['#markup']); ?></td></tr>
    <tr><td class="st"><span class="st_">Class Average Score Overview:</span> <?php  print render($content['field_class_report'][0]['#markup']); ?></td></tr>
  </table>
<br>
  <table>
   <?php if (isset($node->field_header['und'][0]['value'])) { ?>
    <?php $header2_id = $node->field_header['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh2"><?php  print render($content['field_header']['#title']); ?></td>

        <td class="s1_ st_">CA1</td>
        <td class="s1_ st_">CA2</td>
        <td class="s1_ st_">Exam</td>
        
        <td class="s1_ st_">Total</td>
        <td class="s1_ st_">Prev. Score</td>
        <td class="s1_ st_">Stanine Grade</td>
        
        <td class="s1_ st_">Session Average</td>
        <td class="s4_ st_">Remark</td>
        <td class="s1_ st_">Teacher Initial</td>

    </tr>                    
    <?php } ?>
  </table>

  <table>

    <?php if (isset($node->field_biology['und'][0]['value'])) { ?>
    <?php $biology_id = $node->field_biology['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_biology']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_biology'][0]['entity']['field_collection_item'][$biology_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_biology'][0]['entity']['field_collection_item'][$biology_id]['field_ca_2']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_biology'][0]['entity']['field_collection_item'][$biology_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_biology'][0]['entity']['field_collection_item'][$biology_id]['field_total_1_st_']['#items'][0]['value']); ?></td>        
        <td class="s1">&nbsp;<?php  print render($content['field_biology'][0]['entity']['field_collection_item'][$biology_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_biology'][0]['entity']['field_collection_item'][$biology_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_biology'][0]['entity']['field_collection_item'][$biology_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_biology'][0]['entity']['field_collection_item'][$biology_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_biology'][0]['entity']['field_collection_item'][$biology_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
        

    <?php if (isset($node->field_arabic_language['und'][0]['value'])) { ?>
    <?php $arabic_id = $node->field_arabic_language['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_arabic_language']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_arabic_language'][0]['entity']['field_collection_item'][$arabic_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_arabic_language'][0]['entity']['field_collection_item'][$arabic_id]['field_ca_2']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_arabic_language'][0]['entity']['field_collection_item'][$arabic_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_arabic_language'][0]['entity']['field_collection_item'][$arabic_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_arabic_language'][0]['entity']['field_collection_item'][$arabic_id]['field_previous_score']['#items'][0]['value']); ?></td>
  
        <td class="s2">&nbsp;<?php  print render($content['field_arabic_language'][0]['entity']['field_collection_item'][$arabic_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_arabic_language'][0]['entity']['field_collection_item'][$arabic_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_arabic_language'][0]['entity']['field_collection_item'][$arabic_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_arabic_language'][0]['entity']['field_collection_item'][$arabic_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>

        
    <?php if (isset($node->field_agric_science['und'][0]['value'])) { ?>
    <?php $agric_id = $node->field_agric_science['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_agric_science']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_agric_science'][0]['entity']['field_collection_item'][$agric_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_agric_science'][0]['entity']['field_collection_item'][$agric_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_agric_science'][0]['entity']['field_collection_item'][$agric_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_agric_science'][0]['entity']['field_collection_item'][$agric_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_agric_science'][0]['entity']['field_collection_item'][$agric_id]['field_previous_score']['#items'][0]['value']); ?></td>
     
        <td class="s2">&nbsp;<?php  print render($content['field_agric_science'][0]['entity']['field_collection_item'][$agric_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_agric_science'][0]['entity']['field_collection_item'][$agric_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_agric_science'][0]['entity']['field_collection_item'][$agric_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_agric_science'][0]['entity']['field_collection_item'][$agric_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>        
        
          
    <?php if (isset($node->field_basic_science['und'][0]['value'])) { ?>
    <?php $bscience_id = $node->field_basic_science['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_basic_science']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_basic_science'][0]['entity']['field_collection_item'][$bscience_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_basic_science'][0]['entity']['field_collection_item'][$bscience_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_basic_science'][0]['entity']['field_collection_item'][$bscience_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_basic_science'][0]['entity']['field_collection_item'][$bscience_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_basic_science'][0]['entity']['field_collection_item'][$bscience_id]['field_previous_score']['#items'][0]['value']); ?></td>
 
        <td class="s2">&nbsp;<?php  print render($content['field_basic_science'][0]['entity']['field_collection_item'][$bscience_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_basic_science'][0]['entity']['field_collection_item'][$bscience_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_basic_science'][0]['entity']['field_collection_item'][$bscience_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_basic_science'][0]['entity']['field_collection_item'][$bscience_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>            
            
    <?php if (isset($node->field_basic_technology['und'][0]['value'])) { ?>
    <?php $btech_id = $node->field_basic_technology['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_basic_technology']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_basic_technology'][0]['entity']['field_collection_item'][$btech_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_basic_technology'][0]['entity']['field_collection_item'][$btech_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_basic_technology'][0]['entity']['field_collection_item'][$btech_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_basic_technology'][0]['entity']['field_collection_item'][$btech_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_basic_technology'][0]['entity']['field_collection_item'][$btech_id]['field_previous_score']['#items'][0]['value']); ?></td>
   
        <td class="s2">&nbsp;<?php  print render($content['field_basic_technology'][0]['entity']['field_collection_item'][$btech_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_basic_technology'][0]['entity']['field_collection_item'][$btech_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_basic_technology'][0]['entity']['field_collection_item'][$btech_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_basic_technology'][0]['entity']['field_collection_item'][$btech_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>  
            
                    
    <?php if (isset($node->field_business_studies['und'][0]['value'])) { ?>
    <?php $bstudies_id = $node->field_business_studies['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_business_studies']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_business_studies'][0]['entity']['field_collection_item'][$bstudies_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_business_studies'][0]['entity']['field_collection_item'][$bstudies_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_business_studies'][0]['entity']['field_collection_item'][$bstudies_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_business_studies'][0]['entity']['field_collection_item'][$bstudies_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_business_studies'][0]['entity']['field_collection_item'][$bstudies_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_business_studies'][0]['entity']['field_collection_item'][$bstudies_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_business_studies'][0]['entity']['field_collection_item'][$bstudies_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_business_studies'][0]['entity']['field_collection_item'][$bstudies_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_business_studies'][0]['entity']['field_collection_item'][$bstudies_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>    
  

  <?php if (isset($node->field_chemistry['und'][0]['value'])) { ?>
    <?php $chemistry_id = $node->field_chemistry['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_chemistry']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_chemistry'][0]['entity']['field_collection_item'][$chemistry_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_chemistry'][0]['entity']['field_collection_item'][$chemistry_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_chemistry'][0]['entity']['field_collection_item'][$chemistry_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_chemistry'][0]['entity']['field_collection_item'][$chemistry_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_chemistry'][0]['entity']['field_collection_item'][$chemistry_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_chemistry'][0]['entity']['field_collection_item'][$chemistry_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_chemistry'][0]['entity']['field_collection_item'][$chemistry_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_chemistry'][0]['entity']['field_collection_item'][$chemistry_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_chemistry'][0]['entity']['field_collection_item'][$chemistry_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?> 
  
    <?php if (isset($node->field_civic_education['und'][0]['value'])) { ?>
    <?php $civic_id = $node->field_civic_education['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_civic_education']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_civic_education'][0]['entity']['field_collection_item'][$civic_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_civic_education'][0]['entity']['field_collection_item'][$civic_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_civic_education'][0]['entity']['field_collection_item'][$civic_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_civic_education'][0]['entity']['field_collection_item'][$civic_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_civic_education'][0]['entity']['field_collection_item'][$civic_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_civic_education'][0]['entity']['field_collection_item'][$civic_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_civic_education'][0]['entity']['field_collection_item'][$civic_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_civic_education'][0]['entity']['field_collection_item'][$civic_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_civic_education'][0]['entity']['field_collection_item'][$civic_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?> 
  
    <?php if (isset($node->field_commerce['und'][0]['value'])) { ?>
    <?php $commerce_id = $node->field_commerce['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_commerce']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_commerce'][0]['entity']['field_collection_item'][$commerce_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_commerce'][0]['entity']['field_collection_item'][$commerce_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_commerce'][0]['entity']['field_collection_item'][$commerce_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_commerce'][0]['entity']['field_collection_item'][$commerce_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_commerce'][0]['entity']['field_collection_item'][$commerce_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_commerce'][0]['entity']['field_collection_item'][$commerce_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_commerce'][0]['entity']['field_collection_item'][$commerce_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_commerce'][0]['entity']['field_collection_item'][$commerce_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_commerce'][0]['entity']['field_collection_item'][$commerce_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_computer_studies['und'][0]['value'])) { ?>
    <?php $computer_id = $node->field_computer_studies['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_computer_studies']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_computer_studies'][0]['entity']['field_collection_item'][$computer_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_computer_studies'][0]['entity']['field_collection_item'][$computer_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_computer_studies'][0]['entity']['field_collection_item'][$computer_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_computer_studies'][0]['entity']['field_collection_item'][$computer_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_computer_studies'][0]['entity']['field_collection_item'][$computer_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_computer_studies'][0]['entity']['field_collection_item'][$computer_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_computer_studies'][0]['entity']['field_collection_item'][$computer_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_computer_studies'][0]['entity']['field_collection_item'][$computer_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_computer_studies'][0]['entity']['field_collection_item'][$computer_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_cultural_creative_arts['und'][0]['value'])) { ?>
    <?php $ccarts_id = $node->field_cultural_creative_arts['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_cultural_creative_arts']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_cultural_creative_arts'][0]['entity']['field_collection_item'][$ccarts_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_cultural_creative_arts'][0]['entity']['field_collection_item'][$ccarts_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_cultural_creative_arts'][0]['entity']['field_collection_item'][$ccarts_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_cultural_creative_arts'][0]['entity']['field_collection_item'][$ccarts_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_cultural_creative_arts'][0]['entity']['field_collection_item'][$ccarts_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_cultural_creative_arts'][0]['entity']['field_collection_item'][$ccarts_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_cultural_creative_arts'][0]['entity']['field_collection_item'][$ccarts_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_cultural_creative_arts'][0]['entity']['field_collection_item'][$ccarts_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_cultural_creative_arts'][0]['entity']['field_collection_item'][$ccarts_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_data_processing['und'][0]['value'])) { ?>
    <?php $dprocessing_id = $node->field_data_processing['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_data_processing']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_data_processing'][0]['entity']['field_collection_item'][$dprocessing_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_data_processing'][0]['entity']['field_collection_item'][$dprocessing_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_data_processing'][0]['entity']['field_collection_item'][$dprocessing_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_data_processing'][0]['entity']['field_collection_item'][$dprocessing_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_data_processing'][0]['entity']['field_collection_item'][$dprocessing_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_data_processing'][0]['entity']['field_collection_item'][$dprocessing_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_data_processing'][0]['entity']['field_collection_item'][$dprocessing_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_data_processing'][0]['entity']['field_collection_item'][$dprocessing_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_data_processing'][0]['entity']['field_collection_item'][$dprocessing_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_dyeing_and_bleaching['und'][0]['value'])) { ?>
    <?php $dbleaching_id = $node->field_dyeing_and_bleaching['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_dyeing_and_bleaching']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_dyeing_and_bleaching'][0]['entity']['field_collection_item'][$dbleaching_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_dyeing_and_bleaching'][0]['entity']['field_collection_item'][$dbleaching_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_dyeing_and_bleaching'][0]['entity']['field_collection_item'][$dbleaching_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_dyeing_and_bleaching'][0]['entity']['field_collection_item'][$dbleaching_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_dyeing_and_bleaching'][0]['entity']['field_collection_item'][$dbleaching_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_dyeing_and_bleaching'][0]['entity']['field_collection_item'][$dbleaching_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_dyeing_and_bleaching'][0]['entity']['field_collection_item'][$dbleaching_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_dyeing_and_bleaching'][0]['entity']['field_collection_item'][$dbleaching_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_dyeing_and_bleaching'][0]['entity']['field_collection_item'][$dbleaching_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_economics['und'][0]['value'])) { ?>
    <?php $economics_id = $node->field_economics['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_economics']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_economics'][0]['entity']['field_collection_item'][$economics_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_economics'][0]['entity']['field_collection_item'][$economics_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_economics'][0]['entity']['field_collection_item'][$economics_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_economics'][0]['entity']['field_collection_item'][$economics_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_economics'][0]['entity']['field_collection_item'][$economics_id]['field_previous_score']['#items'][0]['value']); ?></td>
     
        <td class="s2">&nbsp;<?php  print render($content['field_economics'][0]['entity']['field_collection_item'][$economics_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_economics'][0]['entity']['field_collection_item'][$economics_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_economics'][0]['entity']['field_collection_item'][$economics_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_economics'][0]['entity']['field_collection_item'][$economics_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_english_language['und'][0]['value'])) { ?>
    <?php $english_id = $node->field_english_language['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_english_language']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_english_language'][0]['entity']['field_collection_item'][$english_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_english_language'][0]['entity']['field_collection_item'][$english_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_english_language'][0]['entity']['field_collection_item'][$english_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_english_language'][0]['entity']['field_collection_item'][$english_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_english_language'][0]['entity']['field_collection_item'][$english_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_english_language'][0]['entity']['field_collection_item'][$english_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_english_language'][0]['entity']['field_collection_item'][$english_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_english_language'][0]['entity']['field_collection_item'][$english_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_english_language'][0]['entity']['field_collection_item'][$english_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_financial_accounting['und'][0]['value'])) { ?>
    <?php $finaccounting_id = $node->field_financial_accounting['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_financial_accounting']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_financial_accounting'][0]['entity']['field_collection_item'][$finaccounting_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_financial_accounting'][0]['entity']['field_collection_item'][$finaccounting_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_financial_accounting'][0]['entity']['field_collection_item'][$finaccounting_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_financial_accounting'][0]['entity']['field_collection_item'][$finaccounting_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_financial_accounting'][0]['entity']['field_collection_item'][$finaccounting_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_financial_accounting'][0]['entity']['field_collection_item'][$finaccounting_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_financial_accounting'][0]['entity']['field_collection_item'][$finaccounting_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_financial_accounting'][0]['entity']['field_collection_item'][$finaccounting_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_financial_accounting'][0]['entity']['field_collection_item'][$finaccounting_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_french['und'][0]['value'])) { ?>
    <?php $french_id = $node->field_french['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_french']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_french'][0]['entity']['field_collection_item'][$french_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_french'][0]['entity']['field_collection_item'][$french_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_french'][0]['entity']['field_collection_item'][$french_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_french'][0]['entity']['field_collection_item'][$french_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_french'][0]['entity']['field_collection_item'][$french_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_french'][0]['entity']['field_collection_item'][$french_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_french'][0]['entity']['field_collection_item'][$french_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_french'][0]['entity']['field_collection_item'][$french_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_french'][0]['entity']['field_collection_item'][$french_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_further_mathematics['und'][0]['value'])) { ?>
    <?php $fmathematics_id = $node->field_further_mathematics['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_further_mathematics']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_further_mathematics'][0]['entity']['field_collection_item'][$fmathematics_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_further_mathematics'][0]['entity']['field_collection_item'][$fmathematics_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_further_mathematics'][0]['entity']['field_collection_item'][$fmathematics_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_further_mathematics'][0]['entity']['field_collection_item'][$fmathematics_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_further_mathematics'][0]['entity']['field_collection_item'][$fmathematics_id]['field_previous_score']['#items'][0]['value']); ?></td>
 
        <td class="s2">&nbsp;<?php  print render($content['field_further_mathematics'][0]['entity']['field_collection_item'][$fmathematics_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_further_mathematics'][0]['entity']['field_collection_item'][$fmathematics_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_further_mathematics'][0]['entity']['field_collection_item'][$fmathematics_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_further_mathematics'][0]['entity']['field_collection_item'][$fmathematics_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_geography['und'][0]['value'])) { ?>
    <?php $geography_id = $node->field_geography['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_geography']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_geography'][0]['entity']['field_collection_item'][$geography_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_geography'][0]['entity']['field_collection_item'][$geography_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_geography'][0]['entity']['field_collection_item'][$geography_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_geography'][0]['entity']['field_collection_item'][$geography_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_geography'][0]['entity']['field_collection_item'][$geography_id]['field_previous_score']['#items'][0]['value']); ?></td>
  
        <td class="s2">&nbsp;<?php  print render($content['field_geography'][0]['entity']['field_collection_item'][$geography_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_geography'][0]['entity']['field_collection_item'][$geography_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_geography'][0]['entity']['field_collection_item'][$geography_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_geography'][0]['entity']['field_collection_item'][$geography_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_government['und'][0]['value'])) { ?>
    <?php $government_id = $node->field_government['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_government']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_government'][0]['entity']['field_collection_item'][$government_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_geography'][0]['entity']['field_collection_item'][$geography_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_government'][0]['entity']['field_collection_item'][$government_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_government'][0]['entity']['field_collection_item'][$government_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_government'][0]['entity']['field_collection_item'][$government_id]['field_ca_2']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_government'][0]['entity']['field_collection_item'][$government_id]['field_previous_score']['#items'][0]['value']); ?></td>
 
        <td class="s2">&nbsp;<?php  print render($content['field_government'][0]['entity']['field_collection_item'][$government_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_government'][0]['entity']['field_collection_item'][$government_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_government'][0]['entity']['field_collection_item'][$government_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_government'][0]['entity']['field_collection_item'][$government_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_health_science['und'][0]['value'])) { ?>
    <?php $hscience_id = $node->field_health_science['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_health_science']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_health_science'][0]['entity']['field_collection_item'][$hscience_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_health_science'][0]['entity']['field_collection_item'][$hscience_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_health_science'][0]['entity']['field_collection_item'][$hscience_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_health_science'][0]['entity']['field_collection_item'][$hscience_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_health_science'][0]['entity']['field_collection_item'][$hscience_id]['field_previous_score']['#items'][0]['value']); ?></td>
 
        <td class="s2">&nbsp;<?php  print render($content['field_health_science'][0]['entity']['field_collection_item'][$hscience_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_health_science'][0]['entity']['field_collection_item'][$hscience_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_health_science'][0]['entity']['field_collection_item'][$hscience_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_health_science'][0]['entity']['field_collection_item'][$hscience_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_home_economics['und'][0]['value'])) { ?>
    <?php $heconomics_id = $node->field_home_economics['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_home_economics']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_home_economics'][0]['entity']['field_collection_item'][$heconomics_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_home_economics'][0]['entity']['field_collection_item'][$heconomics_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_home_economics'][0]['entity']['field_collection_item'][$heconomics_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_home_economics'][0]['entity']['field_collection_item'][$heconomics_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_home_economics'][0]['entity']['field_collection_item'][$heconomics_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_home_economics'][0]['entity']['field_collection_item'][$heconomics_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_home_economics'][0]['entity']['field_collection_item'][$heconomics_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_home_economics'][0]['entity']['field_collection_item'][$heconomics_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_home_economics'][0]['entity']['field_collection_item'][$heconomics_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  <?php if (isset($node->field_irs['und'][0]['value'])) { ?>
    <?php $irs_id = $node->field_irs['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_irs']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_irs'][0]['entity']['field_collection_item'][$irs_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_irs'][0]['entity']['field_collection_item'][$irs_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_irs'][0]['entity']['field_collection_item'][$irs_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_irs'][0]['entity']['field_collection_item'][$irs_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_irs'][0]['entity']['field_collection_item'][$irs_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_irs'][0]['entity']['field_collection_item'][$irs_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_irs'][0]['entity']['field_collection_item'][$irs_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_irs'][0]['entity']['field_collection_item'][$irs_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_irs'][0]['entity']['field_collection_item'][$irs_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_lit_in_english['und'][0]['value'])) { ?>
    <?php $litenglish_id = $node->field_lit_in_english['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_lit_in_english']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_lit_in_english'][0]['entity']['field_collection_item'][$litenglish_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_lit_in_english'][0]['entity']['field_collection_item'][$litenglish_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_lit_in_english'][0]['entity']['field_collection_item'][$litenglish_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_lit_in_english'][0]['entity']['field_collection_item'][$litenglish_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_lit_in_english'][0]['entity']['field_collection_item'][$litenglish_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_lit_in_english'][0]['entity']['field_collection_item'][$litenglish_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_lit_in_english'][0]['entity']['field_collection_item'][$litenglish_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_lit_in_english'][0]['entity']['field_collection_item'][$litenglish_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_lit_in_english'][0]['entity']['field_collection_item'][$litenglish_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_marketing['und'][0]['value'])) { ?>
    <?php $marketing_id = $node->field_marketing['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_marketing']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_marketing'][0]['entity']['field_collection_item'][$marketing_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_marketing'][0]['entity']['field_collection_item'][$marketing_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_marketing'][0]['entity']['field_collection_item'][$marketing_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_marketing'][0]['entity']['field_collection_item'][$marketing_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_marketing'][0]['entity']['field_collection_item'][$marketing_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_marketing'][0]['entity']['field_collection_item'][$marketing_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_marketing'][0]['entity']['field_collection_item'][$marketing_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_marketing'][0]['entity']['field_collection_item'][$marketing_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_marketing'][0]['entity']['field_collection_item'][$marketing_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_mathematics['und'][0]['value'])) { ?>
    <?php $mathematics_id = $node->field_mathematics['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_mathematics']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_mathematics'][0]['entity']['field_collection_item'][$mathematics_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_mathematics'][0]['entity']['field_collection_item'][$mathematics_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_mathematics'][0]['entity']['field_collection_item'][$mathematics_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_mathematics'][0]['entity']['field_collection_item'][$mathematics_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_mathematics'][0]['entity']['field_collection_item'][$mathematics_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_mathematics'][0]['entity']['field_collection_item'][$mathematics_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_mathematics'][0]['entity']['field_collection_item'][$mathematics_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_mathematics'][0]['entity']['field_collection_item'][$mathematics_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_mathematics'][0]['entity']['field_collection_item'][$mathematics_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_phonetics['und'][0]['value'])) { ?>
    <?php $phonetics_id = $node->field_phonetics['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_phonetics']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_phonetics'][0]['entity']['field_collection_item'][$phonetics_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_phonetics'][0]['entity']['field_collection_item'][$phonetics_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_phonetics'][0]['entity']['field_collection_item'][$phonetics_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_phonetics'][0]['entity']['field_collection_item'][$phonetics_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_phonetics'][0]['entity']['field_collection_item'][$phonetics_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_phonetics'][0]['entity']['field_collection_item'][$phonetics_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_phonetics'][0]['entity']['field_collection_item'][$phonetics_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_phonetics'][0]['entity']['field_collection_item'][$phonetics_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_phonetics'][0]['entity']['field_collection_item'][$phonetics_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_physical_health_edu_['und'][0]['value'])) { ?>
    <?php $phyhealth_id = $node->field_physical_health_edu_['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_physical_health_edu_']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_physical_health_edu_'][0]['entity']['field_collection_item'][$phyhealth_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_physical_health_edu_'][0]['entity']['field_collection_item'][$phyhealth_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_physical_health_edu_'][0]['entity']['field_collection_item'][$phyhealth_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_physical_health_edu_'][0]['entity']['field_collection_item'][$phyhealth_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_physical_health_edu_'][0]['entity']['field_collection_item'][$phyhealth_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_physical_health_edu_'][0]['entity']['field_collection_item'][$phyhealth_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_physical_health_edu_'][0]['entity']['field_collection_item'][$phyhealth_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_physical_health_edu_'][0]['entity']['field_collection_item'][$phyhealth_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_physical_health_edu_'][0]['entity']['field_collection_item'][$phyhealth_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_physics['und'][0]['value'])) { ?>
    <?php $physics_id = $node->field_physics['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_physics']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_physics'][0]['entity']['field_collection_item'][$physics_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_physics'][0]['entity']['field_collection_item'][$physics_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_physics'][0]['entity']['field_collection_item'][$physics_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_physics'][0]['entity']['field_collection_item'][$physics_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_physics'][0]['entity']['field_collection_item'][$physics_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_physics'][0]['entity']['field_collection_item'][$physics_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_physics'][0]['entity']['field_collection_item'][$physics_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_physics'][0]['entity']['field_collection_item'][$physics_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_physics'][0]['entity']['field_collection_item'][$physics_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_practical_agriculture['und'][0]['value'])) { ?>
    <?php $pagric_id = $node->field_practical_agriculture['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_practical_agriculture']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_practical_agriculture'][0]['entity']['field_collection_item'][$pagric_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_physics'][0]['entity']['field_collection_item'][$physics_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_practical_agriculture'][0]['entity']['field_collection_item'][$pagric_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_practical_agriculture'][0]['entity']['field_collection_item'][$pagric_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_practical_agriculture'][0]['entity']['field_collection_item'][$pagric_id]['field_ca_2']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_practical_agriculture'][0]['entity']['field_collection_item'][$pagric_id]['field_previous_score']['#items'][0]['value']); ?></td>
  
        <td class="s2">&nbsp;<?php  print render($content['field_practical_agriculture'][0]['entity']['field_collection_item'][$pagric_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_practical_agriculture'][0]['entity']['field_collection_item'][$pagric_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_practical_agriculture'][0]['entity']['field_collection_item'][$pagric_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_practical_agriculture'][0]['entity']['field_collection_item'][$pagric_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_quantitative_reasoning['und'][0]['value'])) { ?>
    <?php $qreasoning_id = $node->field_quantitative_reasoning['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_quantitative_reasoning']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_quantitative_reasoning'][0]['entity']['field_collection_item'][$qreasoning_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_quantitative_reasoning'][0]['entity']['field_collection_item'][$qreasoning_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_quantitative_reasoning'][0]['entity']['field_collection_item'][$qreasoning_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_quantitative_reasoning'][0]['entity']['field_collection_item'][$qreasoning_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_quantitative_reasoning'][0]['entity']['field_collection_item'][$qreasoning_id]['field_previous_score']['#items'][0]['value']); ?></td>
     
        <td class="s2">&nbsp;<?php  print render($content['field_quantitative_reasoning'][0]['entity']['field_collection_item'][$qreasoning_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_quantitative_reasoning'][0]['entity']['field_collection_item'][$qreasoning_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_quantitative_reasoning'][0]['entity']['field_collection_item'][$qreasoning_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_quantitative_reasoning'][0]['entity']['field_collection_item'][$qreasoning_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_quran_memorization['und'][0]['value'])) { ?>
    <?php $qmemorization_id = $node->field_quran_memorization['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_quran_memorization']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_quran_memorization'][0]['entity']['field_collection_item'][$qmemorization_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_quran_memorization'][0]['entity']['field_collection_item'][$qmemorization_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_quran_memorization'][0]['entity']['field_collection_item'][$qmemorization_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_quran_memorization'][0]['entity']['field_collection_item'][$qmemorization_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_quran_memorization'][0]['entity']['field_collection_item'][$qmemorization_id]['field_previous_score']['#items'][0]['value']); ?></td>
   
        <td class="s2">&nbsp;<?php  print render($content['field_quran_memorization'][0]['entity']['field_collection_item'][$qmemorization_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_quran_memorization'][0]['entity']['field_collection_item'][$qmemorization_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_quran_memorization'][0]['entity']['field_collection_item'][$qmemorization_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_quran_memorization'][0]['entity']['field_collection_item'][$qmemorization_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_rhyme_['und'][0]['value'])) { ?>
    <?php $rhyme_id = $node->field_rhyme_['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_rhyme_']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_rhyme_'][0]['entity']['field_collection_item'][$rhyme_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_rhyme_'][0]['entity']['field_collection_item'][$rhyme_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_rhyme_'][0]['entity']['field_collection_item'][$rhyme_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_rhyme_'][0]['entity']['field_collection_item'][$rhyme_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_rhyme_'][0]['entity']['field_collection_item'][$rhyme_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_rhyme_'][0]['entity']['field_collection_item'][$rhyme_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_rhyme_'][0]['entity']['field_collection_item'][$rhyme_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_rhyme_'][0]['entity']['field_collection_item'][$rhyme_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_rhyme_'][0]['entity']['field_collection_item'][$rhyme_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_science_technology['und'][0]['value'])) { ?>
    <?php $sciencetech_id = $node->field_science_technology['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_science_technology']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_science_technology'][0]['entity']['field_collection_item'][$sciencetech_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_science_technology'][0]['entity']['field_collection_item'][$sciencetech_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_science_technology'][0]['entity']['field_collection_item'][$sciencetech_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_science_technology'][0]['entity']['field_collection_item'][$sciencetech_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_science_technology'][0]['entity']['field_collection_item'][$sciencetech_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_science_technology'][0]['entity']['field_collection_item'][$sciencetech_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_science_technology'][0]['entity']['field_collection_item'][$sciencetech_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_science_technology'][0]['entity']['field_collection_item'][$sciencetech_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_science_technology'][0]['entity']['field_collection_item'][$sciencetech_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_social_studies['und'][0]['value'])) { ?>
    <?php $social_id = $node->field_social_studies['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_social_studies']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_social_studies'][0]['entity']['field_collection_item'][$social_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_social_studies'][0]['entity']['field_collection_item'][$social_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_social_studies'][0]['entity']['field_collection_item'][$social_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_social_studies'][0]['entity']['field_collection_item'][$social_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_social_studies'][0]['entity']['field_collection_item'][$social_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_social_studies'][0]['entity']['field_collection_item'][$social_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_social_studies'][0]['entity']['field_collection_item'][$social_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_social_studies'][0]['entity']['field_collection_item'][$social_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_social_studies'][0]['entity']['field_collection_item'][$social_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_technical_drawing['und'][0]['value'])) { ?>
    <?php $techdrawing_id = $node->field_technical_drawing['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_technical_drawing']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_technical_drawing'][0]['entity']['field_collection_item'][$techdrawing_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_technical_drawing'][0]['entity']['field_collection_item'][$techdrawing_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_technical_drawing'][0]['entity']['field_collection_item'][$techdrawing_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_technical_drawing'][0]['entity']['field_collection_item'][$techdrawing_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_technical_drawing'][0]['entity']['field_collection_item'][$techdrawing_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_technical_drawing'][0]['entity']['field_collection_item'][$techdrawing_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_technical_drawing'][0]['entity']['field_collection_item'][$techdrawing_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_technical_drawing'][0]['entity']['field_collection_item'][$techdrawing_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_technical_drawing'][0]['entity']['field_collection_item'][$techdrawing_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_verbal_reasoning['und'][0]['value'])) { ?>
    <?php $vreasoning_id = $node->field_verbal_reasoning['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_verbal_reasoning']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_verbal_reasoning'][0]['entity']['field_collection_item'][$vreasoning_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_verbal_reasoning'][0]['entity']['field_collection_item'][$vreasoning_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_verbal_reasoning'][0]['entity']['field_collection_item'][$vreasoning_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_verbal_reasoning'][0]['entity']['field_collection_item'][$vreasoning_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_verbal_reasoning'][0]['entity']['field_collection_item'][$vreasoning_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_verbal_reasoning'][0]['entity']['field_collection_item'][$vreasoning_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_verbal_reasoning'][0]['entity']['field_collection_item'][$vreasoning_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_verbal_reasoning'][0]['entity']['field_collection_item'][$vreasoning_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_verbal_reasoning'][0]['entity']['field_collection_item'][$vreasoning_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_vocational_aptitude['und'][0]['value'])) { ?>
    <?php $vaptitude_id = $node->field_vocational_aptitude['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_vocational_aptitude']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_vocational_aptitude'][0]['entity']['field_collection_item'][$vaptitude_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_vocational_aptitude'][0]['entity']['field_collection_item'][$vaptitude_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_vocational_aptitude'][0]['entity']['field_collection_item'][$vaptitude_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_vocational_aptitude'][0]['entity']['field_collection_item'][$vaptitude_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_vocational_aptitude'][0]['entity']['field_collection_item'][$vaptitude_id]['field_previous_score']['#items'][0]['value']); ?></td>
 
        <td class="s2">&nbsp;<?php  print render($content['field_vocational_aptitude'][0]['entity']['field_collection_item'][$vaptitude_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_vocational_aptitude'][0]['entity']['field_collection_item'][$vaptitude_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_vocational_aptitude'][0]['entity']['field_collection_item'][$vaptitude_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_vocational_aptitude'][0]['entity']['field_collection_item'][$vaptitude_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_writing['und'][0]['value'])) { ?>
    <?php $writing_id = $node->field_writing['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_writing']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_writing'][0]['entity']['field_collection_item'][$writing_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_writing'][0]['entity']['field_collection_item'][$writing_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_writing'][0]['entity']['field_collection_item'][$writing_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_writing'][0]['entity']['field_collection_item'][$writing_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_writing'][0]['entity']['field_collection_item'][$writing_id]['field_previous_score']['#items'][0]['value']); ?></td>
 
        <td class="s2">&nbsp;<?php  print render($content['field_writing'][0]['entity']['field_collection_item'][$writing_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_writing'][0]['entity']['field_collection_item'][$writing_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_writing'][0]['entity']['field_collection_item'][$writing_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_writing'][0]['entity']['field_collection_item'][$writing_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  
  <?php if (isset($node->field_yoruba['und'][0]['value'])) { ?>
    <?php $writing_id = $node->field_yoruba['und'][0]['value']; ?>
    <tr class="t1">
        <td class="sh"><?php  print render($content['field_yoruba']['#title']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_yoruba'][0]['entity']['field_collection_item'][$writing_id]['field_ca_1st_']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_yoruba'][0]['entity']['field_collection_item'][$writing_id]['field_ca_2']['#items'][0]['value']); ?></td>

        <td class="s1">&nbsp;<?php  print render($content['field_yoruba'][0]['entity']['field_collection_item'][$writing_id]['field_exam_1st_']['#items'][0]['value']); ?></td>
        <td class="s5">&nbsp;<?php  print render($content['field_yoruba'][0]['entity']['field_collection_item'][$writing_id]['field_total_1_st_']['#items'][0]['value']); ?></td>
        
        <td class="s1">&nbsp;<?php  print render($content['field_yoruba'][0]['entity']['field_collection_item'][$writing_id]['field_previous_score']['#items'][0]['value']); ?></td>

        <td class="s2">&nbsp;<?php  print render($content['field_yoruba'][0]['entity']['field_collection_item'][$writing_id]['field_stanine_grade']['#items'][0]['value']); ?></td>
        <td class="s3">&nbsp;<?php  print render($content['field_yoruba'][0]['entity']['field_collection_item'][$writing_id]['field_subject_average_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_yoruba'][0]['entity']['field_collection_item'][$writing_id]['field_remark']['#items'][0]['value']); ?></td>
        <td class="s1">&nbsp;<?php  print render($content['field_yoruba'][0]['entity']['field_collection_item'][$writing_id]['field_teacher_s_initial']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
  </table>
  
    <table>
      <?php if (isset($node->field_psychometric_skills['und'][0]['value'])) { ?>
    <?php $psychometric_id = $node->field_psychometric_skills['und'][0]['value']; ?>
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
        <td class="s4">&nbsp;<?php  print render($content['field_psychometric_skills'][0]['entity']['field_collection_item'][$psychometric_id]['field_psychometric_handwriting']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_psychometric_skills'][0]['entity']['field_collection_item'][$psychometric_id]['field_psychometric_verbal_fluenc']['#items'][0]['value']); ?></td>

        <td class="s4">&nbsp;<?php  print render($content['field_psychometric_skills'][0]['entity']['field_collection_item'][$psychometric_id]['field_psychometric_games']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_psychometric_skills'][0]['entity']['field_collection_item'][$psychometric_id]['field_psychometric_sports']['#items'][0]['value']); ?></td>
        
        <td class="s4">&nbsp;<?php  print render($content['field_psychometric_skills'][0]['entity']['field_collection_item'][$psychometric_id]['field_psychometric_handling_tool']['#items'][0]['value']); ?></td>

        <td class="s4">&nbsp;<?php  print render($content['field_psychometric_skills'][0]['entity']['field_collection_item'][$psychometric_id]['field_psychometric_drawing_paint']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_psychometric_skills'][0]['entity']['field_collection_item'][$psychometric_id]['field_psychometric_musical_skill']['#items'][0]['value']); ?></td>
      </tr>                    
    <?php } ?>
      <?php if (isset($node->field_affective_areas['und'][0]['value'])) { ?>
    <?php $affective_id = $node->field_affective_areas['und'][0]['value']; ?>
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
        <td class="s4">&nbsp;<?php  print render($content['field_affective_areas'][0]['entity']['field_collection_item'][$affective_id]['field_affective_areas_punctualit']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_affective_areas'][0]['entity']['field_collection_item'][$affective_id]['field_affective_areas_neatness']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_affective_areas'][0]['entity']['field_collection_item'][$affective_id]['field_affective_areas_politeness']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_affective_areas'][0]['entity']['field_collection_item'][$affective_id]['field_affective_areas_honesty']['#items'][0]['value']); ?></td>
        
        <td class="s4">&nbsp;<?php  print render($content['field_affective_areas'][0]['entity']['field_collection_item'][$affective_id]['field_cooperation_with_others']['#items'][0]['value']); ?></td>

        <td class="s4">&nbsp;<?php  print render($content['field_affective_areas'][0]['entity']['field_collection_item'][$affective_id]['field_affective_areas_leadership']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_affective_areas'][0]['entity']['field_collection_item'][$affective_id]['field_affective_areas_helping_ot']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_affective_areas'][0]['entity']['field_collection_item'][$affective_id]['field_affective_areas_emotional_']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_affective_areas'][0]['entity']['field_collection_item'][$affective_id]['field_affective_areas_health']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_affective_areas'][0]['entity']['field_collection_item'][$affective_id]['field_affective_areas_attitude_i']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_affective_areas'][0]['entity']['field_collection_item'][$affective_id]['field_affective_areas_attentiven']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_affective_areas'][0]['entity']['field_collection_item'][$affective_id]['field_affective_areas_perseveran']['#items'][0]['value']); ?></td>
        <td class="s4">&nbsp;<?php  print render($content['field_affective_areas'][0]['entity']['field_collection_item'][$affective_id]['field_affective_areas_speaking_h']['#items'][0]['value']); ?></td>

      </tr>                    
    <?php } ?>
    
    <tr><td class="st"><h5>Teacher's Comment</h5> <?php  print render($content['field_teacher_s_comment'][0]['#markup']); ?></td></tr>
    <tr><td class="st"><h5>Principal's Comment</h5> <?php  print render($content['field_principal_s_comment'][0]['#markup']); ?></td></tr>
    <tr><td class="st">Session Card: <?php  print render($content['field_report_card_reference'][0]['#markup']); ?></td></tr>

  </table>
  </div>
<?php // dpm($content); ?>
  <?php
    // Remove the "Add new comment" link on the teaser page or if the comment
    // form is being displayed on the same page.
    if ($teaser || !empty($content['comments']['comment_form'])) {
      unset($content['links']['comment']['#links']['comment-add']);
    }
    // Only display the wrapper div if there are links.
    $links = render($content['links']);
    if ($links):
  ?>
    <div class="link-wrapper">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</div>