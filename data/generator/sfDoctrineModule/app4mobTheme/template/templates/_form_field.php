[?php if ($field->isPartial()): ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/'.$name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php elseif ($field->isComponent()): ?]
[?php include_component('<?php echo $this->getModuleName() ?>', $name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php else: ?]
<!--<div class="[?php echo $class ?][?php $form[$name]->hasError() and print ' errors' ?]">-->
[?php echo $form[$name]->renderError() ?]
<div  class="form-group ">

    [?php echo $form[$name]->renderLabel($label, array('class' => 'control-label col-lg-3')) ?]

    <div class="col-lg-6" id="addClassToForm">[?php echo $form[$name]->render($attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes, array('class' => 'form-control')) ?]</div>

    [?php if ($help): ?]
    <div class="help">[?php echo __($help, array(), '<?php echo $this->getI18nCatalogue() ?>') ?]</div>
    [?php elseif ($help = $form[$name]->renderHelp()): ?]
    <div class="help">[?php echo $help ?]</div>
    [?php endif; ?]
</div>
<!--</div>-->
[?php endif; ?]

<script>
   $(document).ready(function () {

        $('#addClassToForm input').addClass('form-control');
        $('#addClassToForm input[type="radio"], #addClassToForm input[type="checkbox"]').removeClass('form-control');

        $("#addClassToForm select").removeClass('form-control');
        $("#addClassToForm select").select2();
        
    });

</script>
