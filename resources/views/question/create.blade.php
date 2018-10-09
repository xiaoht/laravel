@extends('layouts.app')
@section('content')
    @include('vendor.ueditor.assets')
    <section class="page first" style="padding-top: 218px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            发布问题
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('question.store') }}" method="post">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label class="pull-left" for="title">标题</label>
                                    <input type="text" name="title" class="form-control" placeholder="请输入标题" value="{{ old('title') }}">
                                </div>

                                <!-- 编辑器容器 -->
                                <script id="container" name="content" type="text/plain">{!! old('content') !!}</script>
                                <button style="margin-top: 10px" class="btn btn-success pull-right">发布问题</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container', {
            toolbars: [
                ['bold', 'italic', 'underline', 'strikethrough', 'blockquote', 'insertunorderedlist', 'insertorderedlist', 'justifyleft','justifycenter', 'justifyright',  'link', 'insertimage', 'fullscreen']
            ],
            elementPathEnabled: false,
            enableContextMenu: false,
            autoClearEmptyNode:true,
            wordCount:false,
            imagePopup:false,
            autotypeset:{ indent: true,imageBlockLine: 'center' }
        });
        ue.ready(function() {
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
            ue.setHeight(250);
        });
    </script>
@endsection

