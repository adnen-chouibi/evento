[?php if (!$pager->getNbResults()): ?]
<p>[?php echo __('No result', array(), 'sf_admin') ?]</p>
[?php else: ?]
<div class="adv-table editable-table ">
    <div class="row">

        <div class="col-lg-6">
            <div class="dataTables_info" id="editable-sample_info">
                [?php echo format_number_choice('[0] no result|[1] 1 result|(1,+Inf] %1% results', array('%1%' => $pager->getNbResults()), $pager->getNbResults(), 'sf_admin') ?]
                [?php if ($pager->haveToPaginate()): ?]
                [?php echo __('(page %%page%%/%%nb_pages%%)', array('%%page%%' => $pager->getPage(), '%%nb_pages%%' => $pager->getLastPage()), 'sf_admin') ?]
                [?php endif; ?]
            </div>
        </div>
        <div class="col-lg-6" style="margin-bottom: 0px;">
            [?php if ($pager->haveToPaginate()): ?]
            [?php include_partial('<?php echo $this->getModuleName() ?>/pagination', array('pager' => $pager)) ?]
            [?php endif; ?]
        </div>
    </div>
    <table class="table table-striped" style="border-bottom: 2px solid #ddd;">
        <thead>
            <tr>
                <?php if ($this->configuration->getValue('list.batch_actions')): ?>
                    <th id="sf_admin_list_batch_actions"><input id="sf_admin_list_batch_checkbox" type="checkbox" onclick="checkAll();" /></th>
                <?php endif; ?>
                [?php include_partial('<?php echo $this->getModuleName() ?>/list_th_<?php echo $this->configuration->getValue('list.layout') ?>', array('sort' => $sort)) ?]
                <?php if ($this->configuration->getValue('list.object_actions')): ?>
                    <th id="sf_admin_list_th_actions">[?php echo __('Actions', array(), 'sf_admin') ?]</th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            [?php foreach ($pager->getResults() as $i => $<?php echo $this->getSingularName() ?>): $odd = fmod(++$i, 2) ? 'odd' : 'even' ?]
            <tr>
                <?php if ($this->configuration->getValue('list.batch_actions')): ?>
                    [?php include_partial('<?php echo $this->getModuleName() ?>/list_td_batch_actions', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'helper' => $helper)) ?]
                <?php endif; ?>
                [?php include_partial('<?php echo $this->getModuleName() ?>/list_td_<?php echo $this->configuration->getValue('list.layout') ?>', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>)) ?]
                <?php if ($this->configuration->getValue('list.object_actions')): ?>
                    [?php include_partial('<?php echo $this->getModuleName() ?>/list_td_actions', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'helper' => $helper)) ?]
                <?php endif; ?>
            </tr>
            [?php endforeach; ?]
        </tbody>

    </table>
    <div class="row">

        <div class="col-lg-6">
            <div class="dataTables_info" id="editable-sample_info" style="margin-bottom: 0px;">
                [?php echo format_number_choice('[0] no result|[1] 1 result|(1,+Inf] %1% results', array('%1%' => $pager->getNbResults()), $pager->getNbResults(), 'sf_admin') ?]
                [?php if ($pager->haveToPaginate()): ?]
                [?php echo __('(page %%page%%/%%nb_pages%%)', array('%%page%%' => $pager->getPage(), '%%nb_pages%%' => $pager->getLastPage()), 'sf_admin') ?]
                [?php endif; ?]
            </div>
        </div>
        <div class="col-lg-6">
            [?php if ($pager->haveToPaginate()): ?]
            [?php include_partial('<?php echo $this->getModuleName() ?>/pagination', array('pager' => $pager)) ?]
            [?php endif; ?]
        </div>
    </div>
</div>
[?php endif; ?]
<script type="text/javascript">
    /* <![CDATA[ */
    function checkAll()
    {
        var boxes = document.getElementsByTagName('input');
        for (var index = 0; index < boxes.length; index++) {
            box = boxes[index];
            if (box.type == 'checkbox' && box.className == 'sf_admin_batch_checkbox')
                box.checked = document.getElementById('sf_admin_list_batch_checkbox').checked
        }
        return true;
    }
    /* ]]> */
</script>