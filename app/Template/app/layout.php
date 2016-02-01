<section id="main">
    <div class="page-header page-header-mobile">
        <ul>
            <?php if ($this->user->hasAccess('ProjectCreation', 'create')): ?>
                <li>
                    <i class="fa fa-plus fa-fw"></i>
                    <?= $this->url->link(t('New project'), 'ProjectCreation', 'create', array(), false, 'popover') ?>
                </li>
            <?php endif ?>
            <li>
                <i class="fa fa-lock fa-fw"></i>
                <?= $this->url->link(t('New private project'), 'ProjectCreation', 'createPrivate', array(), false, 'popover') ?>
            </li>
            <li>
                <i class="fa fa-search fa-fw"></i>
                <?= $this->url->link(t('Search'), 'search', 'index') ?>
            </li>
            <li>
                <i class="fa fa-folder fa-fw"></i>
                <?= $this->url->link(t('Project management'), 'project', 'index') ?>
            </li>
        </ul>
    </div>
    <section class="sidebar-container" id="dashboard">
        <?= $this->render('app/sidebar', array('user' => $user)) ?>
        <div class="sidebar-content">
            <?= $content_for_sublayout ?>
        </div>
    </section>
</section>