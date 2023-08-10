<picture style="display: flex; justify-content: center; margin: 20px 0;">
    <source media="(min-width:576px)" srcset="{{ $block->image('image', 'default') }}" width="80%" >
    <source media="(min-width:280px)" srcset="{{ $block->image('image', 'mobile') }}" width="100%" >
    <img src="{{ $block->image('image', 'default') }}" alt="thiết kế web, seo tổng thể, thiết kế app" width="80%" >
</picture>