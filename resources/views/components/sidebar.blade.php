<div class="sidebar">
    <div class="widget">
        <h2 class="widget-title">Search</h2>
        <x-search></x-search>
    </div><!-- end widget -->

    <div class="widget">
        <h2 class="widget-title">Recent Posts</h2>
        <div class="blog-list-widget">
            <div class="list-group">
                <x-sidebar-recent-post/>
                <x-sidebar-recent-post/>
                <x-sidebar-recent-post/>
                <x-sidebar-recent-post/>
            </div>
        </div><!-- end blog-list -->
    </div><!-- end widget -->

    <div class="widget">
        <h2 class="widget-title">Popular Categories</h2>
        <div class="link-widget">
            <x-categories-listing :categories="$categories"/>
        </div><!-- end link-widget -->
    </div><!-- end widget -->
</div><!-- end sidebar -->