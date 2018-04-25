@extends('layouts.app')

@section('content')
    <h1 style="text-align: center;">管理區</h1>
    <div class="row">
         <div class="col-md-2 col-md-offset-2">
            <ul class="nav nav-list">
                <li class="nav-header">公告內容管理</li>
                <li><a href="#menu1">重要訊息</a></li>
                <li><a href="#menu2">其他實習機會</a></li>
                <li><a href="#menu3">工作機會</a></li>
                <li><a href="#menu4">校外活動</a></li>
                <li><a href="#menu5">服務項目</a></li>
                <li><a href="#menu6">職涯影音頻道</a></li>
                <li class="nav-header">首頁輪播管理</li>
                <li><a href="#menu7">首頁輪播管理</a></li>
                <li class="nav-header">系統管理</li>
                <li><a href="#menu8">文章內容編輯</a></li>
                <li><a href="#menu9">簡報內容編輯</a></li>
                <li><a href="#menu10">快速連結管理</a></li>
                <li class="nav-header">帳號管理</li>
                <li><a href="#menu11">帳號管理</a></li>
            </ul>
        </div>

            <div class="tab-content">
                <div id="menu1" class="tab-pane fade">
                        <h3>重要訊息</h3>
                        <button type="button" class="btn btn-primary">新增</button>
                </div>
                <div id="menu2" class="tab-pane fade">
                        <h3>其他實習機會</h3>
                        <button type="button" class="btn btn-primary">新增</button>
                </div>
                <div id="menu3" class="tab-pane fade">
                        <h3>工作機會</h3>
                        <button type="button" class="btn btn-primary">新增</button>
                </div>
                <div id="menu4" class="tab-pane fade">
                        <h3>校外活動</h3>
                        <button type="button" class="btn btn-primary">新增</button>
                </div>
                <div id="menu5" class="tab-pane fade">
                        <h3>服務項目</h3>
                        <button type="button" class="btn btn-primary">新增</button>
                </div>
                <div id="menu6" class="tab-pane fade">
                        <h3>職涯影音頻道</h3>
                        <button type="button" class="btn btn-primary">新增</button>
                </div>
                <div id="menu7" class="tab-pane fade">
                        <h3>首頁輪播管理</h3>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#SlideshowModal">新增首頁輪播</button>
                        <!-- Modal -->
                        <div class="modal fade" id="SlideshowModal" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">新增首頁輪播</h4>
                                </div>
                                <div class="modal-body">
                                  <form id="slideshow_form" method="post" action="{{ url('/slideshows/create') }}">
                                    {!! csrf_field() !!}
                                    中文標題: <input type="text" name="title" required="required" /><br>
                                    活動網址: <input type="url" name="url" required="required" /><br>
                                    預計活動時間: 起<input type="date" name="start_at" required="required" > 迄<input type="date" name="stop_at"  required="required" ><br>
                                    廣告圖片: <input type="file" name="path" accept="image/*"  required="required" >
                                    <input type="submit" value="Submit">
                                    </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                        </div>
                            @include('slideshows.show')
                <div id="menu8" class="tab-pane fade">
                        <h3>文章內容管理</h3>
                        <button type="button" class="btn btn-primary">新增</button>
                </div>
                <div id="menu9" class="tab-pane fade">
                        <h3>簡報內容管理</h3>
                        <button type="button" class="btn btn-primary">新增</button>
                </div>
                <div id="menu10" class="tab-pane fade">
                        <h3>快速連結管理</h3>
                        <button type="button" class="btn btn-primary">新增</button>
                </div>
                <div id="menu11" class="tab-pane fade">
                        <h3>帳號管理</h3>
                        <button type="button" class="btn btn-primary">新增</button>
                </div>
            </div>
    </div>
    <script>
        $(document).ready(function(){
            $(".nav-list a").click(function(){
                $(this).tab('show');
            });
        });
        </script>

@endsection
