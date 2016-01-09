<li class="header">Main Menu</li>
<li <?php if(isset($m_import)) { ?>class = "active" <?php } ?>><a href='<?php echo site_url('php_excel/import')?>'><i class="fa fa-circle-o"></i> <span>Import</a></span></li>
<li <?php if(isset($m_export)) { ?>class = "active" <?php } ?>><a href='<?php echo site_url('php_excel/export')?>'><i class="fa fa-circle-o"></i> <span>Export</span></a></li>