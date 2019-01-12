<div class="rightContainer">
    <div class="toolBox">
        <h2>Toolbox</h2>
        <ul class="nav nav-tabs">
            <li class="nav-item find"><a class="nav-link" data-toggle="tab" href="#find">Find Books</a></li>
            <li class="nav-item add"><a class="nav-link" data-toggle="tab" href="#add">Add Books</a></li>
            <li class="nav-item gopY"><a class="nav-link" data-toggle="tab" href="#bla">Góp Ý</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="find">
                <div class="form-group">
                    <label for="tl">Thể Loại</label>
                    <select class="form-control" id="tl" name="theLoai">
                        <option hidden selected value>--Chọn thể loại--</option>
                        <option value="1">Comedy</option>
                        <option value="2">Horror</option>
                        <option value="3">Drama</option>
                        <option value="4">Manga</option>
                        <option value="5">Child</option>
                    </select></br>
                </div>
            </div>
            <div class="tab-pane fade active" id="add">
                <p>Bạn phải <span class='dn'>đăng nhập</span> để sử dụng chức năng này</p>
            </div>
            <div class="tab-pane fade" id="bla">
                <div class="form-group">
                    <label for="td">Tiêu Đề</label>
                    <input class="form-control" id="td" type="text" placeholder="Nhập tiêu đề">
                    <label for="txt">Chi tiết</label>
                    <textarea class="form-control" id="txt" cols="30" rows="3" placeholder="..."></textarea></br>
                </div>
            </div>
        </div>
    </div>
    <div class="t2">
        <h2>Tiêu Đề</h2>
        <p id="tText"></p>
    </div>
</div>