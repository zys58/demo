<div class="comment">
    <div class="comment-header">
        <h6 id="comments_count"><i class="fa fa-comments fa-fw"></i>评论</h6>
    </div>
    <div class="comment-body">
        <div id="comments-container"
             data-api-url="{{ route('comment.show',[$commentable->id,
             'commentable_type'=>$commentable_type,
             'redirect'=>(isset($redirect) && $redirect ? $redirect:'')]) }}">
        </div>
        <form id="comment-form" method="post" action="{{ route('comment.store') }}">
            {{ csrf_field() }}
            <input type="hidden" name="commentable_id" value="{{ $commentable->id }}">
            <input type="hidden" name="commentable_type" value="{{ $commentable_type }}">
            @if(!auth()->check())
                <div class="form-group">
                    <label for="username">姓名<span class="required">*</span></label>
                    <input class="form-control" id="username" type="text" name="username" placeholder="您的大名">
                </div>
                <div class="form-group">
                    <label for="email">邮箱<span class="required">*</span></label>
                    <input class="form-control" id="email" type="email" name="email" placeholder="邮箱不会公开">
                </div>
            @endif
            <div class="form-group">
                <label for="comment-content">评论内容<span class="required">*</span></label>
                <textarea placeholder="支持Markdown" style="resize: vertical" id="comment-content" name="content"
                          rows="5" spellcheck="false" class="form-control markdown-content autosize-target"></textarea>
                <span class="help-block required">
                    <strong id="comment_error_msg"></strong>
                </span>
            </div>
            <div class="form-group">
                <input type="submit" id="comment-submit" class="btn btn-primary"
                       value="回复"/>
            </div>
        </form>
    </div>
</div>