<?php
/**
 * 专为博客类网站开发，简洁、美观、响应式的 Typecho 主题。<br/>
 * Github：<a href="https://github.com/liaocp666/Jasmine" target="_blank" title="Jasmine Github Repo">https://github.com/liaocp666/Jasmine</a>
 * Demo：<a href="https://www.liaocp.cn/" target="_blank" title="Jasmine Demo Website">https://www.liaocp.cn/</a>
 *
 * @package Jasmine
 * @author Kent Liao
 * @version 2.0.0
 * @link https://www.liaocp.cn/
 */
if (!defined("__TYPECHO_ROOT_DIR__")) {
  exit();
} ?>
<!DOCTYPE html>
<html lang="zh">
<?php $this->need("header.php"); ?>
<body class="bg-stone-100 dark:bg-[#0a0c19]">
<div class="mx-auto md:max-w-[1200px]">
    <div class="lg:my-16 grid grid-cols-12 rounded bg-white m-1 md:m-2 lg:ml-0 lg:mr-0 dark:bg-[#161829]">
        <div class="hidden col-span-1 lg:block z-[1000]">
            <div class="min-h-screen-jasmine sticky top-16 flex flex-col flex-wrap gap-y-8" id="sidebar-left" itemscope
                 itemtype="https://schema.org/Organization">
                <div></div>
                <?php $this->need("component/logo.php"); ?>
                <?php $this->need("component/nav.php"); ?>
            </div>
        </div>
        <div class="flex col-span-12 lg:col-span-8 flex-col lg:border-x-2 border-stone-100 dark:border-neutral-600 lg:pt-0 lg:px-6 pb-10 px-3">
            <?php $this->need("component/menu.php"); ?>
            <?php if ($this->is("index") && $this->_currentPage == 1): ?>
                <?php $this->need("component/post-top.php"); ?>
            <?php endif; ?>
            <?php $this->need("component/post-item.php"); ?>
            <?php $this->need("component/paging.php"); ?>
        </div>
        <div class="hidden lg:col-span-3 lg:block" id="sidebar-right">
            <?php $this->need("component/sidebar.php"); ?>
        </div>
    </div>
    <?php $this->need("footer.php"); ?>
</div>
</body>

</html>
