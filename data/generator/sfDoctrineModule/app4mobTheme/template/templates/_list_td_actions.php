<td>
    <?php if ($this->configuration->getValue('list.object_actions')): ?> 
        <ul class="sf_admin_td_actions">
            <?php foreach ($this->configuration->getValue('list.object_actions') as $name => $params): ?>
                <?php if (isset($params['condition'])): ?>
                    [?php if ( <?php echo ( isset($params['condition']['invert']) && $params['condition']['invert'] ? '!' : '') . '$' . $this->getSingularName() . '->' . $params['condition']['function'] ?>( <?php echo ( isset($params['condition']['params']) ? $params['condition']['params'] : '' ) ?> ) ): ?] 
                <?php endif; ?>

                <?php if ('_delete' == $name): ?>
                    <span><?php echo $this->addCredentialCondition('[?php echo $helper->linkToDeleteFromList($' . $this->getSingularName() . ', ' . $this->asPhp($params) . ') ?]', $params) ?></span>
                <?php elseif ('_edit' == $name): ?>
                    <span> <?php echo $this->addCredentialCondition('[?php echo $helper->linkToEditFromList($' . $this->getSingularName() . ', ' . $this->asPhp($params) . ') ?]', $params) ?></span>
                <?php elseif ('_show' == $name): ?>
                    <span>  <?php echo $this->addCredentialCondition('[?php echo $helper->linkToShow($' . $this->getSingularName() . ', ' . $this->asPhp($params) . ') ?]', $params) ?></span>
                <?php else: ?>
        <span>   <?php echo $this->addCredentialCondition($this->getLinkToActionFromApp4mobTheme($name, $params, true), $params) ?></span>
                <?php endif; ?>

                <?php if (isset($params['condition'])): ?>
                    [?php endif; ?]
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</td>