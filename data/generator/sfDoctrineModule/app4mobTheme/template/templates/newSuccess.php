
[?php use_helper('I18N', 'Date') ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/assets') ?]



[?php include_partial('<?php echo $this->getModuleName() ?>/flashes') ?]



<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <b>[?php echo <?php echo $this->getI18NString('new.title') ?> ?]</b>
                <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                </span>
            </header>
            <div class="panel-body">
                <div class=" form">

                    <div id="sf_admin_content">
                        [?php include_partial('<?php echo $this->getModuleName() ?>/form', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?]
                    </div>

                
                </div>

            </div>
        </section>
    </div>
</div>