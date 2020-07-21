    <div class="sidebar">
        <ul class="catlist">
            <li class="widget widget_nav_menu">
                    <?php
                     if( is_category(array(2,3,4,5,13)) || in_category(array(2,3,4,5,13))) {
                    ?>
                    <h3>产品展示</h3>
                    <ul>
                        <?php
                            /*
                            *   wp_list_categories( $args )
                            *   作用：
                            *   列出某个分类方式下的分类项目(term)
                            *   默认是获取分类目录下的分类项目
                            */
                            wp_list_categories( array(
                                /*
                                    @成员参数：show_option_all
                                    @参数作用：如果此参数的值不为空的话，则作为一个超链接的文本，而且该超链接指定的是站点的首页。
                                */
                                'show_option_all'    => '',

                                /*
                                    @成员参数：orderby
                                    @参数作用：列出分类目录项目时的排序方式
                                    @可选的值：
                                    ID                  按照分类目录项目的编号排序
                                    name            按照分类目录项目的名称排序   【默认】
                                    slug                按照分类目录项目的别名排序
                                    count           按照分类目录项目下的文章数量排序
                                    term_group  按照分类目录项目的排序编号排序 【不常用】
                                */
                                'orderby'            => 'ID',

                                /*
                                    @成员参数：order
                                    @参数作用：列出分类项目时按照哪种方式排序，升序？还是降序？
                                    @可选的值：
                                    ASC             升序      【默认】
                                    DESC            降序
                                */
                                'order'              => 'ASC',

                                /*
                                    @成员参数：style
                                    @参数作用：分类项目的显示的格式
                                    @可选的值：
                                    list                用li元素包围分类目录项目，如<li>分类目录项目</li>  【默认】
                                    none            不用li元素包围，分类目录项目之间用<br />隔开
                                */
                                'style'              => 'list',

                                /*
                                    @成员参数：show_count
                                    @参数作用：在显示分类目录项目时是否显示分类目录下的文章数量
                                    @可选的值：
                                    1                   显示分类目录项目所包含的文章数量
                                    0                   不显示分类目录项目所包含的文章数量   【默认】
                                */
                                'show_count'         => 0,

                                /*
                                    @成员参数：hide_empty
                                    @参数作用：是否隐藏没有任何文章的分类项目
                                    @可选的值：
                                    1                   隐藏              【默认】
                                    0                   不隐藏
                                */
                                'hide_empty'         => 0,

                                /*
                                    @成员参数：use_desc_for_title
                                    @参数作用：是否将分类项目的描述添加到分类项目的a元素的title属性中
                                    @可选的值：
                                    1                   添加          【默认】
                                    0                   不添加
                                */
                                'use_desc_for_title' => 1,

                                /*
                                    @成员参数：child_of
                                    @参数作用：仅显示某个分类项目所包含的子分类项目
                                    @可选的值：父分类项目的ID编号 或者 0【显示所有分类项目】
                                */
                                'child_of'           => 0,

                                /*
                                    @成员参数：feed
                                    @参数作用：给每条分类项目添加一个超链接，指向对应的分类项目的feed地址。此参数设置的值为超链接的文本。
                                    @可选的值：无限制
                                */
                                'feed'               => '',

                                /*
                                    @成员参数：feed_type
                                    @参数作用：设置feed的方式
                                    @可选的值：rss2, atom, rdf
                                */
                                'feed_type'          => '',

                                /*
                                    @成员参数：feed_image
                                    @参数作用：替换feed参数中设置的文本为一个图片
                                */
                                'feed_image'         => '',

                                /*
                                    @成员参数：exclude
                                    @参数作用：在显示分类项目时排除某些分类项目（填写分类项目的ID）。排除多个分类项目时，要在两个分类项目的ID之间加上逗号（英文输入环境）。
                                    @特别说明：如果想要这个参数正常发挥作用，成员参数include的值必须为空。
                                    @可选的值：分类项目的ID编号
                                */
                                'exclude'            => '',

                                /*
                                    @成员参数：exclude_tree
                                    @参数作用：排除某个分类项目以及其下的子分类项目
                                    @特别说明：如果想要这个参数正常发挥作用，成员参数include的值必须为空。而且成员参数hierarchical的值必须为0（即，不分层级显示子分类项目）
                                */
                                'exclude_tree'       => '',

                                /*
                                    @成员参数：include
                                    @参数作用：仅显示该参数指定的分类项目，多个分类项目的编号之间要用逗号隔开(英文输入环境)
                                */
                                'include'            => '2,3,4,5,13',

                                /*
                                    @成员参数：hierarchical
                                    @参数作用：是否分层级显示分类项目？如果是的话，子分类项目用另外一个ul元素包围；如果否的话，子分类项目和父级分类项目在同一个层级显示
                                    @可选的值：
                                    1                   以层级的方式显示分类项目        【默认】
                                    0                   不以层级的方式显示分类项目
                                */
                                'hierarchical'       => 0,

                                /*
                                    @成员参数：title_li
                                    @参数作用：此信息模块的标题，在至少存在一个分类项目时有效
                                */
                                'title_li'           => '',

                                /*
                                    @成员参数：show_option_none
                                    @参数作用：当没有任何分类项目时所要显示的内容
                                */
                                'show_option_none'   => __( 'No categories' ),

                                /*
                                    @成员参数：number
                                    @参数作用：要显示多少条分类项目？
                                    @默认的值：null（即，无限制）
                                */
                                'number'             => null,

                                /*
                                    @成员参数：echo
                                    @参数作用：是否直接将获取到的分类项目显示出来。
                                    @可选的值：
                                    1                   直接显示        【默认】
                                    0                   不显示，将结果返回
                                */
                                'echo'               => 1,

                                /*
                                    @成员参数：depth
                                    @参数作用：当按照层级显示分类项目时，要显示到哪个层级？
                                    @特别提醒：当成员参数hierarchical的值取为0时（即，不按层级显示），则此参数无效
                                    @可选的值：
                                    0                   显示所有层级      【默认】
                                    -1                  显示所有层级，但都以平级显示（和不分级的效果相同）。
                                    1                   仅显示顶级的分类项目，不显示子孙分类项目。
                                    n                   显示到n级，n代表大于1的数字。
                                */
                                'depth'              => 0,

                                /*
                                    @成员参数：current_category
                                    @参数作用：决定是自动给分类项目的包围元素(li元素)添加一个class属性值(current-cat)，还是指定添加。
                                    @可选的值：
                                    0                   访问哪个分类归档页，就在对应的分类项目的包围元素(li元素)添加一个class属性值current-cat【默认】
                                    n                   n代指的是一个数字，这个数字是分类项目的编号。例如n取值为1，代表的是在编号为1的分类项目的li元素中添加一个class属性值current-cat
                                */
                                'current_category'   => 0,

                                /*
                                    @成员参数：pad_counts
                                    @参数作用：在计算分类项目下的文章数量时，是否包含子分类项目下的文章信息
                                    @可选的值：
                                    1                   包含
                                    0                   不包含
                                */
                                'pad_counts'         => 0,

                                /*
                                    @成员参数：taxonomy
                                    @参数作用：该参数的作用是设定显示哪个分类方式下的分类项目
                                    @可选的值：
                                    category        分类目录        【默认】
                                    post_tag        标签
                                    XXX             自定义的分类方式的名称
                                */
                                'taxonomy'           => 'category',

                                /*
                                    @成员参数：walker
                                    @特别说明：此成员参数是属于高级功能，不常用。而且理解起来比较困难，所以不讲解
                                */
                                'walker'             => null
                            ) );
                        ?>
                    </ul>
                    <?php } else if(is_category(array(6,7,8)) || in_category(array(6,7,8))){?>
                    <h3>新闻中心</h3>
                    <ul>
                        <?php
                            /*
                            *   wp_list_categories( $args )
                            *   作用：
                            *   列出某个分类方式下的分类项目(term)
                            *   默认是获取分类目录下的分类项目
                            */
                            wp_list_categories( array(
                                /*
                                    @成员参数：show_option_all
                                    @参数作用：如果此参数的值不为空的话，则作为一个超链接的文本，而且该超链接指定的是站点的首页。
                                */
                                'show_option_all'    => '',

                                /*
                                    @成员参数：orderby
                                    @参数作用：列出分类目录项目时的排序方式
                                    @可选的值：
                                    ID                  按照分类目录项目的编号排序
                                    name            按照分类目录项目的名称排序   【默认】
                                    slug                按照分类目录项目的别名排序
                                    count           按照分类目录项目下的文章数量排序
                                    term_group  按照分类目录项目的排序编号排序 【不常用】
                                */
                                'orderby'            => 'ID',

                                /*
                                    @成员参数：order
                                    @参数作用：列出分类项目时按照哪种方式排序，升序？还是降序？
                                    @可选的值：
                                    ASC             升序      【默认】
                                    DESC            降序
                                */
                                'order'              => 'ASC',

                                /*
                                    @成员参数：style
                                    @参数作用：分类项目的显示的格式
                                    @可选的值：
                                    list                用li元素包围分类目录项目，如<li>分类目录项目</li>  【默认】
                                    none            不用li元素包围，分类目录项目之间用<br />隔开
                                */
                                'style'              => 'list',

                                /*
                                    @成员参数：show_count
                                    @参数作用：在显示分类目录项目时是否显示分类目录下的文章数量
                                    @可选的值：
                                    1                   显示分类目录项目所包含的文章数量
                                    0                   不显示分类目录项目所包含的文章数量   【默认】
                                */
                                'show_count'         => 0,

                                /*
                                    @成员参数：hide_empty
                                    @参数作用：是否隐藏没有任何文章的分类项目
                                    @可选的值：
                                    1                   隐藏              【默认】
                                    0                   不隐藏
                                */
                                'hide_empty'         => 0,

                                /*
                                    @成员参数：use_desc_for_title
                                    @参数作用：是否将分类项目的描述添加到分类项目的a元素的title属性中
                                    @可选的值：
                                    1                   添加          【默认】
                                    0                   不添加
                                */
                                'use_desc_for_title' => 1,

                                /*
                                    @成员参数：child_of
                                    @参数作用：仅显示某个分类项目所包含的子分类项目
                                    @可选的值：父分类项目的ID编号 或者 0【显示所有分类项目】
                                */
                                'child_of'           => 0,

                                /*
                                    @成员参数：feed
                                    @参数作用：给每条分类项目添加一个超链接，指向对应的分类项目的feed地址。此参数设置的值为超链接的文本。
                                    @可选的值：无限制
                                */
                                'feed'               => '',

                                /*
                                    @成员参数：feed_type
                                    @参数作用：设置feed的方式
                                    @可选的值：rss2, atom, rdf
                                */
                                'feed_type'          => '',

                                /*
                                    @成员参数：feed_image
                                    @参数作用：替换feed参数中设置的文本为一个图片
                                */
                                'feed_image'         => '',

                                /*
                                    @成员参数：exclude
                                    @参数作用：在显示分类项目时排除某些分类项目（填写分类项目的ID）。排除多个分类项目时，要在两个分类项目的ID之间加上逗号（英文输入环境）。
                                    @特别说明：如果想要这个参数正常发挥作用，成员参数include的值必须为空。
                                    @可选的值：分类项目的ID编号
                                */
                                'exclude'            => '',

                                /*
                                    @成员参数：exclude_tree
                                    @参数作用：排除某个分类项目以及其下的子分类项目
                                    @特别说明：如果想要这个参数正常发挥作用，成员参数include的值必须为空。而且成员参数hierarchical的值必须为0（即，不分层级显示子分类项目）
                                */
                                'exclude_tree'       => '',

                                /*
                                    @成员参数：include
                                    @参数作用：仅显示该参数指定的分类项目，多个分类项目的编号之间要用逗号隔开(英文输入环境)
                                */
                                'include'            => '6,7,8',

                                /*
                                    @成员参数：hierarchical
                                    @参数作用：是否分层级显示分类项目？如果是的话，子分类项目用另外一个ul元素包围；如果否的话，子分类项目和父级分类项目在同一个层级显示
                                    @可选的值：
                                    1                   以层级的方式显示分类项目        【默认】
                                    0                   不以层级的方式显示分类项目
                                */
                                'hierarchical'       => 0,

                                /*
                                    @成员参数：title_li
                                    @参数作用：此信息模块的标题，在至少存在一个分类项目时有效
                                */
                                    'title_li'           => '',

                                /*
                                    @成员参数：show_option_none
                                    @参数作用：当没有任何分类项目时所要显示的内容
                                */
                                'show_option_none'   => __( 'No categories' ),

                                /*
                                    @成员参数：number
                                    @参数作用：要显示多少条分类项目？
                                    @默认的值：null（即，无限制）
                                */
                                'number'             => null,

                                /*
                                    @成员参数：echo
                                    @参数作用：是否直接将获取到的分类项目显示出来。
                                    @可选的值：
                                    1                   直接显示        【默认】
                                    0                   不显示，将结果返回
                                */
                                'echo'               => 1,

                                /*
                                    @成员参数：depth
                                    @参数作用：当按照层级显示分类项目时，要显示到哪个层级？
                                    @特别提醒：当成员参数hierarchical的值取为0时（即，不按层级显示），则此参数无效
                                    @可选的值：
                                    0                   显示所有层级      【默认】
                                    -1                  显示所有层级，但都以平级显示（和不分级的效果相同）。
                                    1                   仅显示顶级的分类项目，不显示子孙分类项目。
                                    n                   显示到n级，n代表大于1的数字。
                                */
                                'depth'              => 0,

                                /*
                                    @成员参数：current_category
                                    @参数作用：决定是自动给分类项目的包围元素(li元素)添加一个class属性值(current-cat)，还是指定添加。
                                    @可选的值：
                                    0                   访问哪个分类归档页，就在对应的分类项目的包围元素(li元素)添加一个class属性值current-cat【默认】
                                    n                   n代指的是一个数字，这个数字是分类项目的编号。例如n取值为1，代表的是在编号为1的分类项目的li元素中添加一个class属性值current-cat
                                */
                                'current_category'   => 0,

                                /*
                                    @成员参数：pad_counts
                                    @参数作用：在计算分类项目下的文章数量时，是否包含子分类项目下的文章信息
                                    @可选的值：
                                    1                   包含
                                    0                   不包含
                                */
                                'pad_counts'         => 0,

                                /*
                                    @成员参数：taxonomy
                                    @参数作用：该参数的作用是设定显示哪个分类方式下的分类项目
                                    @可选的值：
                                    category        分类目录        【默认】
                                    post_tag        标签
                                    XXX             自定义的分类方式的名称
                                */
                                'taxonomy'           => 'category',

                                /*
                                    @成员参数：walker
                                    @特别说明：此成员参数是属于高级功能，不常用。而且理解起来比较困难，所以不讲解
                                */
                                'walker'             => null
                            ) );
                        ?>
                    </ul>
                    <?php } elseif(is_page(array('关于我们','企业文化','合作伙伴','合作经销','售后服务','发展历程'))){?>
                        <h3>关于我们</h3>
                        <ul>
                            <?php
                            /*
                            *   函数：wp_list_pages( $args )
                            *   作用：显示页面信息列表
                            */
                            wp_list_pages( array(
                                /*
                                    @成员参数：sort_column
                                    @参数作用：页面信息列表的排序方式
                                    @可选的值：
                                    post_title              按照页面的标题排序   【默认】
                                    menu_order      按照页面的数序排序(在发布页面时设置的“排序”属性的值)
                                    post_date           按照页面的发布时间排序
                                    post_modified   按照页面的修改时间排序
                                    ID                          按照页面的编号排序
                                    post_author     按照页面的作者的编号排序
                                    post_name           按照页面的别名排序
                                */
                                'sort_column'  => 'menu_order, post_title',

                                /*
                                    @成员参数：sort_order
                                    @参数作用：按照升序还是降序的方式排列页面信息列表
                                    @可选的值：
                                    ASC                     按照升序的方式排列       【默认】
                                    DESC                    按照降序的方式排列
                                */
                                'sort_order'   => 'ASC',

                                /*
                                    @成员参数：exclude
                                    @参数作用：在显示结果中排除某些页面信息
                                    @可选的值：页面信息的ID编号
                                    @特别提醒：当要排除多个页面信息的话，之间要用逗号隔开(英文输入环境)
                                */
                                'exclude'      => '',

                                /*
                                    @成员参数：exclude_tree
                                    @参数作用：在显示结果中排除某系列页面信息(即，排除某个父页面及其子页面)
                                    @可选的值：要排除的页面信息的ID编号(填写要排除的父页面的编号，不用填写子页面的编号)
                                    @特别提醒：当要排除多个页面信息的话，之间要用逗号隔开(英文输入环境)
                                */
                                'exclude_tree'      => '',

                                /*
                                    @成员参数：include
                                    @参数作用：仅显示在该参数中设置的页面信息
                                    @可选的值：页面信息的ID编号
                                    @特别提醒：当要包含多个页面信息的话，之间要用逗号隔开(英文输入环境)
                                */
                                'include'   => '33,35,37,40,42,44',

                                /*
                                    @成员参数：depth
                                    @参数作用：显示结果中要显示到哪个层级？
                                    @可选的值：
                                    0                   显示所有层级，而且不干涉其层级(即，保留层级)     【默认】
                                    -1                  显示所有层级，不保留层级关系(即，所有页面信息在同一级中显示)
                                    1                   显示所有顶级页面信息
                                    2, 3, ...           显示到第2, 3, ....级
                                */
                                'depth'     => -1,

                                /*
                                    @成员参数：child_of
                                    @参数作用：仅显示某个页面信息下的子页面信息
                                    @可选的值：父页面的编号 或者 0(显示所有页面信息)
                                    @默认的值：0
                                */
                                'child_of'      => 0,

                                /*
                                    @成员参数：show_date
                                    @参数作用：是否显示页面信息的发布、修改日期？显示发布日期还是修改日期？
                                    @可选的值：
                                    ''                  空值，不显示日期    【默认】
                                    modified        显示修改日期
                                    created     显示发布日期
                                */
                                'show_date'     => '',

                                /*
                                    @成员参数：date_format
                                    @参数作用：日期的格式
                                    @参数说明：
                                    Y                   年       如，2014
                                    m                   月       如，08
                                    d                   日       如，20
                                    h                   时       如，21
                                    i                   分       如，18
                                    s                   秒       如，59
                                    @默认的值：get_option('date_format')  即在后台设置的日期格式
                                */
                                'date_format'   => get_option('date_format'),

                                /*
                                    @成员参数：title_li
                                    @参数作用：页面信息列表的标题
                                    @默认的值：__('Pages')
                                */
                                'title_li'      => '',

                                /*
                                    @成员参数：echo
                                    @参数作用：是否直接显示页面信息列表？
                                    @可选的值：
                                    1                   直接显示        【默认】
                                    0                   不显示，作为结果返回
                                */
                                'echo'  => 1,

                                /*
                                    @成员参数：meta_key
                                    @参数作用：仅显示包含该参数指定的键(所谓键，是指发布页面时设置的自定栏目名称)的页面信息
                                */
                                'meta_key'  => '',

                                /*
                                    @成员参数：meta_value
                                    @参数作用：与meta_key配合使用，meta_value是值自定义栏目的值。如果指定了一个值，那么仅显示自定义栏目的值与此参数设置的值相同的页面信息
                                */
                                'meta_value'    => '',

                                /*
                                    @成员参数：link_before
                                    @参数作用：在页面信息的标题之前添加的内容( 举例，<a>link_before页面标题</a> )
                                */
                                'link_before'   => '',

                                /*
                                    @成员参数：link_after
                                    @参数作用：在页面信息的标题之后添加的内容( 举例，<a>页面标题link_after</a> )
                                */
                                'link_after'    => '',

                                /*
                                    @成员参数：authors
                                    @参数作用：显示指定作者(用作者的id编号指定)发布的页面，当要显示多个作者发布的页面时，作者的编号之间用逗号隔开(英文输入环境)
                                    @默认的值：空值，当值为空值时，则显示所有作者发布的页面信息
                                */
                                'authors'       => '',

                                /*
                                    @成员参数：number
                                    @参数作用：此参数设定要显示多少篇页面信息
                                    @默认的值：null  没有数量限制，有多少页面就显示多少页面
                                */
                                'number'        => null,

                                /*
                                    @成员参数：offset
                                    @参数作用：获取页面信息列表时跳过的页面信息的数量
                                    @特别说明：此参数仅在参数number的值为大于0的值时有效
                                    @默认的值：0， 即在获取页面信息列表时不跳过任何的页面信息
                                */
                                'offset'            => 0,

                                /*
                                    @成员参数：post_type
                                    @参数作用：获取的信息类型
                                    @默认的值：page  即获取页面信息
                                    @特别说明：此处的值只能为page，填写其他的信息类型如post，则无法获取任何信息
                                */
                                'post_type'     => 'page',

                                /*
                                    @成员参数：post_status
                                    @参数作用：调取指定状态的页面信息，如publish, private
                                    @默认的值：publish 即公开的页面信息, private是私密的页面信息
                                    @特别说明：既想显示公开的页面也想显示私有的页面，那么参数为'publish,private'
                                */
                                'post_status'       => 'publish',

                            ) );
                            ?>
                        </ul>
                    <?php } elseif(is_page(array('服务支持','产品咨询','在线留言','职位招聘'))) {?>
                        <h3>服务中心</h3>
                        <ul>
                            <?php
                            /*
                            *   函数：wp_list_pages( $args )
                            *   作用：显示页面信息列表
                            */
                            wp_list_pages( array(
                                /*
                                    @成员参数：sort_column
                                    @参数作用：页面信息列表的排序方式
                                    @可选的值：
                                    post_title              按照页面的标题排序   【默认】
                                    menu_order      按照页面的数序排序(在发布页面时设置的“排序”属性的值)
                                    post_date           按照页面的发布时间排序
                                    post_modified   按照页面的修改时间排序
                                    ID                          按照页面的编号排序
                                    post_author     按照页面的作者的编号排序
                                    post_name           按照页面的别名排序
                                */
                                'sort_column'  => 'menu_order, post_title',

                                /*
                                    @成员参数：sort_order
                                    @参数作用：按照升序还是降序的方式排列页面信息列表
                                    @可选的值：
                                    ASC                     按照升序的方式排列       【默认】
                                    DESC                    按照降序的方式排列
                                */
                                'sort_order'   => '',

                                /*
                                    @成员参数：exclude
                                    @参数作用：在显示结果中排除某些页面信息
                                    @可选的值：页面信息的ID编号
                                    @特别提醒：当要排除多个页面信息的话，之间要用逗号隔开(英文输入环境)
                                */
                                'exclude'      => '',

                                /*
                                    @成员参数：exclude_tree
                                    @参数作用：在显示结果中排除某系列页面信息(即，排除某个父页面及其子页面)
                                    @可选的值：要排除的页面信息的ID编号(填写要排除的父页面的编号，不用填写子页面的编号)
                                    @特别提醒：当要排除多个页面信息的话，之间要用逗号隔开(英文输入环境)
                                */
                                'exclude_tree'      => '',

                                /*
                                    @成员参数：include
                                    @参数作用：仅显示在该参数中设置的页面信息
                                    @可选的值：页面信息的ID编号
                                    @特别提醒：当要包含多个页面信息的话，之间要用逗号隔开(英文输入环境)
                                */
                                'include'   => '46,49,52,54',

                                /*
                                    @成员参数：depth
                                    @参数作用：显示结果中要显示到哪个层级？
                                    @可选的值：
                                    0                   显示所有层级，而且不干涉其层级(即，保留层级)     【默认】
                                    -1                  显示所有层级，不保留层级关系(即，所有页面信息在同一级中显示)
                                    1                   显示所有顶级页面信息
                                    2, 3, ...           显示到第2, 3, ....级
                                */
                                'depth'     => -1,

                                /*
                                    @成员参数：child_of
                                    @参数作用：仅显示某个页面信息下的子页面信息
                                    @可选的值：父页面的编号 或者 0(显示所有页面信息)
                                    @默认的值：0
                                */
                                'child_of'      => 0,

                                /*
                                    @成员参数：show_date
                                    @参数作用：是否显示页面信息的发布、修改日期？显示发布日期还是修改日期？
                                    @可选的值：
                                    ''                  空值，不显示日期    【默认】
                                    modified        显示修改日期
                                    created     显示发布日期
                                */
                                'show_date'     => '',

                                /*
                                    @成员参数：date_format
                                    @参数作用：日期的格式
                                    @参数说明：
                                    Y                   年       如，2014
                                    m                   月       如，08
                                    d                   日       如，20
                                    h                   时       如，21
                                    i                   分       如，18
                                    s                   秒       如，59
                                    @默认的值：get_option('date_format')  即在后台设置的日期格式
                                */
                                'date_format'   => get_option('date_format'),

                                /*
                                    @成员参数：title_li
                                    @参数作用：页面信息列表的标题
                                    @默认的值：__('Pages')
                                */
                                'title_li'      => '',

                                /*
                                    @成员参数：echo
                                    @参数作用：是否直接显示页面信息列表？
                                    @可选的值：
                                    1                   直接显示        【默认】
                                    0                   不显示，作为结果返回
                                */
                                'echo'  => 1,

                                /*
                                    @成员参数：meta_key
                                    @参数作用：仅显示包含该参数指定的键(所谓键，是指发布页面时设置的自定栏目名称)的页面信息
                                */
                                'meta_key'  => '',

                                /*
                                    @成员参数：meta_value
                                    @参数作用：与meta_key配合使用，meta_value是值自定义栏目的值。如果指定了一个值，那么仅显示自定义栏目的值与此参数设置的值相同的页面信息
                                */
                                'meta_value'    => '',

                                /*
                                    @成员参数：link_before
                                    @参数作用：在页面信息的标题之前添加的内容( 举例，<a>link_before页面标题</a> )
                                */
                                'link_before'   => '',

                                /*
                                    @成员参数：link_after
                                    @参数作用：在页面信息的标题之后添加的内容( 举例，<a>页面标题link_after</a> )
                                */
                                'link_after'    => '',

                                /*
                                    @成员参数：authors
                                    @参数作用：显示指定作者(用作者的id编号指定)发布的页面，当要显示多个作者发布的页面时，作者的编号之间用逗号隔开(英文输入环境)
                                    @默认的值：空值，当值为空值时，则显示所有作者发布的页面信息
                                */
                                'authors'       => '',

                                /*
                                    @成员参数：number
                                    @参数作用：此参数设定要显示多少篇页面信息
                                    @默认的值：null  没有数量限制，有多少页面就显示多少页面
                                */
                                'number'        => null,

                                /*
                                    @成员参数：offset
                                    @参数作用：获取页面信息列表时跳过的页面信息的数量
                                    @特别说明：此参数仅在参数number的值为大于0的值时有效
                                    @默认的值：0， 即在获取页面信息列表时不跳过任何的页面信息
                                */
                                'offset'            => 0,

                                /*
                                    @成员参数：post_type
                                    @参数作用：获取的信息类型
                                    @默认的值：page  即获取页面信息
                                    @特别说明：此处的值只能为page，填写其他的信息类型如post，则无法获取任何信息
                                */
                                'post_type'     => 'page',

                                /*
                                    @成员参数：post_status
                                    @参数作用：调取指定状态的页面信息，如publish, private
                                    @默认的值：publish 即公开的页面信息, private是私密的页面信息
                                    @特别说明：既想显示公开的页面也想显示私有的页面，那么参数为'publish,private'
                                */
                                'post_status'       => 'publish',

                            ) );
                            ?>
                        </ul>
                    <?php } ?>
            </li><!-- .widget -->
            <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
             <?php dynamic_sidebar( 'sidebar-1' ); ?>
            <?php endif; ?>
        </ul><!-- .catlist -->
    </div><!-- .sidebar -->