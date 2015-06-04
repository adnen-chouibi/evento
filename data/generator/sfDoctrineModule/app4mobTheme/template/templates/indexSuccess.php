[?php use_helper('I18N', 'Date') ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/assets') ?]

<div id="sf_admin_container">
    [?php include_partial('<?php echo $this->getModuleName() ?>/flashes') ?]
</div>


<?php if ($this->configuration->getValue('list.batch_actions')): ?>
    <form action="[?php echo url_for('<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'batch')) ?]" method="post">
    <?php endif; ?>
    <div class="col-sm-12">
        <div class="text-right">
            [?php include_partial('<?php echo $this->getModuleName() ?>/list_actions', array('helper' => $helper)) ?]
            <a href="#myModal-filter" data-toggle="modal" class="btn btn-primary">
                [?php echo __("Search"); ?]
            </a>
        </div>
        <br>
        <section class="panel">

            <header class="panel-heading">
                <b>[?php echo <?php echo $this->getI18NString('list.title') ?> ?]</b>
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                </span>
            </header>
            <div class="panel-body">
                [?php include_partial('<?php echo $this->getModuleName() ?>/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?]
            </div>
        </section>
    </div>
    [?php include_partial('<?php echo $this->getModuleName() ?>/list_batch_actions', array('helper' => $helper)) ?]
    <?php if ($this->configuration->getValue('list.batch_actions')): ?>
    </form>
<?php endif; ?>








<!-- Modal FIlter -->
<div class="modal fade" id="myModal-filter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="[?php echo url_for('<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'filter')) ?]" method="post">
                [?php echo $filters->renderHiddenFields() ?]
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">[?php echo __("Search"); ?></h4>
                </div>
                <div class="modal-body">

                    <?php if ($this->configuration->hasFilterForm()): ?>
                        <div id="sf_admin_bar">
                            [?php include_partial('<?php echo $this->getModuleName() ?>/filters', array('form' => $filters, 'configuration' => $configuration)) ?]
                        </div>
                    <?php endif; ?>

                </div>
                <div class="modal-footer">
                    [?php echo link_to(__('Reset', array(), 'sf_admin'), '<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'filter'), array('query_string' => '_reset', 'method' => 'post')) ?]
                    <button class="btn btn-success" type="submit">[?php echo __('Filter', array(), 'sf_admin') ?]</button>
                </div>
            </form>
        </div>
    </div>
</div>