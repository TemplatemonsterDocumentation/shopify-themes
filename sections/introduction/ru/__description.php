<h2 class="item1">Введение</h2>

<h6>Благодарим Вас за приобретение шаблона Shopify. Данная документация состоит из нескольких частей и охватывает весь
    процесс настройки магазина Shopify с нуля.</h6>

<h3>Что представляет собой платформа Shopify?</h3>

<p><a href="//www.shopify.com/">Shopify</a> — это онлайн-платформа для создания интернет-магазинов. Система построена по
    принципу SaaS (software as a service — программное обеспечение как услуга).</p>

<h3>Что такое SaaS?</h3>

<p>Это модель предоставления услуг, при которой разработчик берёт на себя все заботы по обслуживанию оборудования и
    программного обеспечения, предоставляя потребителю онлайн-приложение в аренду. То есть, вам не нужно искать хостинг,
    устанавливать и настраивать программное обеспечение — всё это делает разработчик, а вы получаете готовый
    интернет-магазин в несколько кликов.</p>

<h3>Шаблон Shopify</h3>

<p>Шаблон Shopify — это тема для оформления вашего магазина. Вы можете легко изменить вид вашего интернет-магазина с
    помощью установки шаблона за несколько простых шагов. Шаблон содержит архив с файлами, которые вы можете изменять по
    своему усмотрению.</p>

<h3>Структура шаблона</h3>

<h6>Комплект шаблона состоит из нескольких папок:</h6>

<ul class="files_structure">
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>screenshots</b></dt>
            <dd>папка со скриншотами шаблона;</dd>
        </dl>
          <li class="file">
                        <dl class="inline-term">
                            <dt>
                                <i class="fa fa-file"></i>
                                <b>sources</b></dt>
                            <dd>файл с дизайном шаблона, csv-файл для импорта продуктов;

                            </dd>
                        </dl>
                    </li>
    </li>

    <li class="file">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-file"></i>
                <b>theme###.zip</b></dt>
            <dd>архив шаблона;</dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        <b>assets</b></dt>
                    <dd>эта папка содержит стили, скрипты, графические файлы темы;</dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        <b>config</b></dt>
                    <dd>папка содержит настройки темы;</dd>
                </dl>
                <ul>
                    <li class="file">
                        <dl class="inline-term">
                            <dt>
                                <i class="fa fa-file"></i>
                                <b>settings_data.json</b></dt>
                            <dd>файл настроек темы; генерируется на основе settings.html, править этот
                                файл вручную не рекомендуется;
                            </dd>
                        </dl>
                    </li>
                     <li class="file">
                        <dl class="inline-term">
                            <dt>
                                <i class="fa fa-file"></i>
                                <b>settings_schema.json</b></dt>
                            <dd>таблица настроек темы, доступных на странице Customize theme;
                        </dd>
                        </dl>
                    </li>
                </ul>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        <b>layout</b></dt>
                    <dd>содержит файлы макета (layout);</dd>
                </dl>
                <ul>
                    <li class="file">
                        <dl class="inline-term">
                            <dt>
                                <i class="fa fa-file"></i>
                                <b>theme.liquid</b></dt>
                            <dd>основной макет темы;</dd>
                        </dl>
                    </li>
                </ul>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        <b>locales</b></dt>
                    <dd> содержит файлы языковых настроек темы;</dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        <b>snippets</b></dt>
                    <dd>содержит сниппеты и виджеты, используемые в шаблоне;</dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        <b>templates</b></dt>
                    <dd>содержит шаблоны страниц магазина (страницы категории, продукта, корзины, и
                        т.д.);
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        <b>documentation.html</b></dt>
                    <dd>файл, содержащий ссылку на документацию.</dd>
                </dl>
            </li>
        </ul>
    </li>
</ul>