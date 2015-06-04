<div class="dataTables_paginate paging_bootstrap pagination">
    <ul>
        <li class="prev disabled"><a href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=1"><i class="fa fa-angle-double-left"></i></a></li>
        <li class="prev disabled"><a href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $pager->getPreviousPage() ?]"><i class="fa fa-angle-left"></i></a></li>

        [?php foreach ($pager->getLinks() as $page): ?]

        <li class="
            [?php if ($page == $pager->getPage())   echo 'active' ?]
           
            ">
            <a href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $page ?]">[?php echo $page ?]</a></li>
        
        [?php endforeach; ?]
        <li class="next"><a href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $pager->getNextPage() ?]"><i class="fa fa-angle-right"></i></a></li>
        <li class="next"><a href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $pager->getLastPage() ?]"><i class="fa fa-angle-double-right"></i></a></li>
    </ul>
</div>
