<?php require_once("menu.php"); ?>
<script type="text/javascript" src="./js/tinymce/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: "textarea#elementDetail",
        theme: "modern",
        width: 750,
        height: 600,
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor moxiemanager"
        ],
        content_css: "css/content.css",
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
        style_formats: [
            {title: 'Bold text', inline: 'b'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],
        moxiemanager_image_settings : {
            view : 'thumbs',
            extensions : 'jpg,png,gif,jpeg',
            path : '/ext_files/images'
        },

        moxiemanager_file_settings : {
            extensions : 'xls,xlsx,ppt,pptx,txt,docx,doc,zip,pdf,mp4,flv,wmv,webm,ogv',
            path : '/ext_files/files'
        },
		
		moxiemanager_media_settings : {
            extensions : 'xls,xlsx,ppt,pptx,txt,docx,doc,zip,pdf,mp4,flv,wmv,webm,ogv,swf,SWF',
            path : '/ext_files/files'
        },
		
		moxiemanager_extensions : 'xls,xlsx,ppt,pptx,txt,docx,doc,zip,pdf,mp4,flv,wmv,webm,ogv,swf,SWF',
		relative_urls : false,
		remove_script_host : true
    });

    tinymce.init({
        selector: "textarea#tooltip",
        theme: "modern",
        width: 300,
        height: 300,
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor moxiemanager"
        ],
        content_css: "css/content.css",
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
        style_formats: [
            {title: 'Bold text', inline: 'b'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],
        moxiemanager_image_settings : {
            view : 'thumbs',
            extensions : 'jpg,png,gif,jpeg',
            path : '/ext_files/images'
        },

        moxiemanager_file_settings : {
            extensions : 'xls,xlsx,ppt,pptx,txt,docx,doc,zip,pdf,mp4,flv,wmv,webm,ogv',
            path : '/ext_files/files'
        },

        moxiemanager_media_settings : {
            extensions : 'xls,xlsx,ppt,pptx,txt,docx,doc,zip,pdf,mp4,flv,wmv,webm,ogv,swf,SWF',
            path : '/ext_files/files'
        },

        moxiemanager_extensions : 'xls,xlsx,ppt,pptx,txt,docx,doc,zip,pdf,mp4,flv,wmv,webm,ogv,swf,SWF',
        relative_urls : false,
        remove_script_host : true
    });
</script>
<div class="centercontent">

    <div class="pageheader notab">
        <h1 class="pagetitle">Element</h1>
        <span class="pagedesc">องค์ประกอบ</span>
    </div><!--pageheader-->

<div id="contentwrapper" class="contentwrapper">
<?
  require_once("./common/message.php");
?>
<div id="validation" class="subcontent">

    <form id="entryForm" class="stdform" method="post" action="#">
        <input type="hidden" name="task" id="task" value="save" />
        <input type="hidden" name="elementID" id="elementID" value="<?php echo $elementID;?>" />

        <input type="hidden" name="elementID_parent" id="elementID_parent" value="<?php echo $elementID_parent;?>" />
        <input type="hidden" name="elementID_group" id="elementID_group" value="<?php echo $elementID_group;?>" />
        <p>
            <label>ชื่อองค์ประกอบ<span class="require">*</span></label>
            <span class="field"><input type="text" name="elementName" id="elementName" class="longinput" value="<?php echo $elementName;?>" /></span>
        </p>

        <p>
            <label>Tool Tip</label>
            <span class="field"><textarea cols="80" rows="5" name="tooltip" class="mediuminput" id="tooltip"><?php echo $tooltip;?></textarea></span>
            <br/>
        </p>

        <p>
            <label>รายละเอียด</label>
            <span class="field"><textarea cols="80" rows="5" name="elementDetail" class="mediuminput" id="elementDetail"><?php echo $elementDetail;?></textarea></span>
            <br/>
        </p>

        <p>
            <label>ซ่อนรายละเอียด</label>
            <span class="formwrapper">
				<input type="checkbox" name="isHideDetail"  id="isHideDetail" /><br />
			</span>

        </p>

        <p>
            <label>การเรียงลำดับ</label>
            <span class="field"><input type="text" name="orderNo" id="orderNo" class="smallinput" value="<?php echo $orderNo;?>" /></span>
        </p>

        <p>
            <label>ระดับชั้นความลับ<span class="require">*</span></label>
            <span class="field">
            <select name="securityLevelID" id="securityLevelID">
                <option value="">เลือกชั้นความลับ</option>
                <?foreach($securityLevelList as $securityLevel) {?>
                    <option value="<?=$securityLevel->securityLevelID?>"><?=$securityLevel->securityLevelName?></option>
                <?}?>
            </select>
            </span>
        </p>

        <p>
            <label>สถานะ<span class="require">*</span></label>
            <span class="field">
            <select name="statusID" id="statusID">
                <option value="">เลือกสถานะ</option>
                <?foreach($statusList as $status) {?>
                <option value="<?=$status->statusID?>"><?=$status->statusNameTH?></option>
                <?}?>
            </select>
            </span>
        </p>

		<p>
            <label>แสดงลิงค์หน้าแรก</label>
            <span class="formwrapper">
				<input type="checkbox" name="isHighlight"  id="isHighlight" /><br />
			</span>

        </p>

        <p>
            <label>Tags</label>
            <span class="field"><input type="text" name="tags" id="tags" class="smallinput" value="<?php echo $tags;?>" /><br>สามารถใส่ได้มากกว่า 1 tags โดยใช้เครื่องหมายจุลภาค (,) คั่น เช่น weapon,ปืน</span>
        </p>

        <p>
            <label>แสดงลำดับ</label>
            <span class="formwrapper">
				<input type="checkbox" name="showOrderNo"  id="showOrderNo" /><br />
			</span>

        </p>

        <br />

        <p class="stdformbutton">
            <button class="submit radius2">บันทึกข้อมูล</button>
            <button class="stdbtn" onclick="doCancel();">ยกเลิก</button>
        </p>
    </form>

</div><!--subcontent-->

</div><!--contentwrapper-->

</div><!-- centercontent -->
<script>

    jQuery(document).ready(function(){

        ///// FORM VALIDATION /////
        jQuery("#entryForm").validate({
            rules: {
                elementName: "required",
				securityLevelID: "required",
                statusID: "required"
            },
            messages: {
                elementName: "กรุณาใส่ชื่อข้อมูล",
				securityLevelID: "กรุณาเลือกชั้นความลับ",
                statusID: "กรุณาเลือกสถานะ"
            }
        });

        jQuery("#publishDate").datepicker({ dateFormat: 'yy-mm-dd' });
        jQuery("#releaseDate").datepicker({ dateFormat: 'yy-mm-dd' });

        jQuery("#contentTypeID").val("<?=$contentTypeID?>");
        jQuery("#statusID").val("<?=$statusID?>");
        jQuery("#securityLevelID").val("<?=$securityLevelID?>");
        
        <?
        if(!empty($isHighlight)) {
        ?>
        jQuery("#isHighlight").attr("checked", "checked");
        <?
        }
        ?>
        <?
        if(!empty($isHideDetail)) {
        ?>
        jQuery("#isHideDetail").attr("checked", "checked");
        <?
        }
        ?>
        <?
        if(!empty($showOrderNo)) {
        ?>
        jQuery("#showOrderNo").attr("checked", "checked");
        <?
        }
        ?>


    });

    function doCancel() {
		if(jQuery("#elementID").val() != "") {
			jQuery("#task").val("list");
			jQuery("#entryForm").submit();
			
		} else {
			history.go(-1);
		}
    }

</script>