<?php

if( !isset($left_nav_active) ){
    $left_nav_active = '';
}
if( !isset($sub_nav_active) ){
    $sub_nav_active = '';
}

?>
<style>
    .left-sidebar {
        position: absolute;
        top: 102px;
        bottom: 0;
        left: 0;
        transition: width .3s;
        background: #fafafa;
        padding: 10px 20px;
        z-index: 2;
        width: 245px;
        overflow: hidden;
        outline: none;
        height: 110%
    }
    .aui-nav-heading{
        font-weight: bold;
        margin-left: 10px;
    }
    .admin-menu-links div .active {
        border-bottom:1px solid #1f78d1;
        color:rgba(0,0,0,0.85);
    }
    .aui-nav li.active a{
        border-bottom:1px solid #1f78d1;
        color:rgba(0,0,0,0.85);
    }

</style>
<aside aria-live="polite" class="js-right-sidebar left-sidebar right-sidebar-expanded affix-top"
       data-spy="affix" tabindex="0"  >
    <div class="issuable-sidebar">

        <div class="admin-menu-links">
            <div class="aui-nav-heading  <? if($sub_nav_active=='issue_type') echo 'active';?>"><strong>问题类型</strong></div>
            <ul class="aui-nav" resolved="">
                <li class="<? if($left_nav_active=='type') echo 'active';?>">
                    <a href="/admin/issue_type" id="left_issue_type">问题类型</a>
                </li>
                <li class="<? if($left_nav_active=='type_scheme') echo 'active';?>">
                    <a href="/admin/issue_type_scheme" id="left_issue_type_scheme">问题类型方案</a>
                </li>
            </ul>
            <hr>
            <div class="aui-nav-heading <? if($sub_nav_active=='issue_attribute') echo 'active';?>">问题属性</div>
            <ul class="aui-nav" resolved="">
                <li class="<? if($left_nav_active=='status') echo 'active';?>">
                    <a href="/admin/issue_status" id="left_status">状态</a>
                </li>
                <li class="<? if($left_nav_active=='workflow') echo 'active';?>">
                    <a href="/admin/workflow" id="left_worker_flow">工作流</a>
                </li>
                <li class="<? if($left_nav_active=='user_default_setting') echo 'active';?>">
                    <a href="/admin/workflow_scheme" id="left_worker_flow_scheme">工作流方案</a>
                </li>
                <li class="<? if($left_nav_active=='resolve') echo 'active';?>">
                    <a href="/admin/issue_resolve" id="left_resolve">解决结果</a>
                </li>
                <li class="<? if($left_nav_active=='priority') echo 'active';?>">
                    <a href="/admin/issue_priority" id="left_priority">优先级</a>
                </li>
            </ul>
            <div class="aui-nav-heading <? if($sub_nav_active=='ui') echo 'active';?>">界面</div>
            <ul class="aui-nav" resolved="">
                <li class="<? if($left_nav_active=='field') echo 'active';?>">
                    <a href="/admin/field" id="left_field_custom">字段</a>
                </li>
                <li class="<? if($left_nav_active=='issue_ui') echo 'active';?>">
                    <a href="/admin/issue_ui" id="left_issue_ui">问题类型界面方案</a>
                </li>
            </ul>

        </div>
    </div>
</aside>