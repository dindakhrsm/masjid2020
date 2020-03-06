<div class="col-md-4">
    <aside class="right-sidebar">
        <div class="search-widget">
            <form action="{{route('blog')}}">
            <div class="input-group">
                <input type="text" class="form-control input-lg" value="{{request('term')}}" name="term" placeholder="Masukkan kata kunci pencarian...">
                <span class="input-group-btn">
                            <button class="btn btn-lg btn-default" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                          </span>
            </div><!-- /input-group -->
            </form>
        </div>

        <div class="widget">
            <div class="widget-heading">
                <h4>Kategori</h4>
            </div>
            <div class="widget-body">
                <ul class="categories">
                    @foreach($categories as $category)
                    <li>
                        <a href="{{route('category', $category->id)}}"><i class="fa fa-angle-right"></i> {{$category->title}} </a>
                        <span class="badge pull-right">{{$category->posts->count()}}</span>
                    </li>
                        @endforeach
                </ul>
            </div>
        </div>

        <div class="widget">
            <div class="widget-heading">
                <h4>Postingan Populer</h4>
            </div>
            <div class="widget-body">
                <ul class="popular-posts">
                    <li>
                        <div class="post-image">
                            <a href="#">
                                <img src={{asset("img/Post_Image_5_thumb.jpg")}} />
                            </a>
                        </div>
                        <div class="post-body">
                            <h6><a href="#">Blog Post #5</a></h6>
                            <div class="post-meta">
                                <span>36 minutes ago</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="post-image">
                            <a href="#">
                                <img src={{asset("img/Post_Image_4_thumb.jpg")}} />
                            </a>
                        </div>
                        <div class="post-body">
                            <h6><a href="#">Blog Post #4</a></h6>
                            <div class="post-meta">
                                <span>36 minutes ago</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="post-image">
                            <a href="#">
                                <img src={{asset("img/Post_Image_6_thumb.jpg")}} />
                            </a>
                        </div>
                        <div class="post-body">
                            <h6><a href="#">Blog Post #3</a></h6>
                            <div class="post-meta">
                                <span>36 minutes ago</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="widget">
            <div class="widget-heading">
                <h4>Tags</h4>
            </div>
            <div class="widget-body">
                <ul class="tags">
                    <li><a href="#">Khutbah Jumat</a></li>
                    <li><a href="#">Khutbah Rutin</a></li>
                    <li><a href="#">Shahibul Hikayat</a></li>
                    <li><a href="#">Shiroh Nabi</a></li>
                    <li><a href="#">Shiroh Sahabat</a></li>
                    <li><a href="#">Laporan Keuangan</a></li>
                    <li><a href="#">Info Kegiatan</a></li>
                    <li><a href="#">Resume Ceramah</a></li>
                </ul>
            </div>
        </div>

        <div class="widget">
            <div class="widget-heading">
                <h4>Jadwal Sholat</h4>
            </div>
            <div class="widget-body">
                <br>
                <p style="text-align: center;">
                    <iframe src="https://jam.jadwalsholat.org/digitalclock/" frameborder="0" width="175" height="60"></iframe>
                    <br>
                    <iframe src="https://www.jadwalsholat.org/adzan/ajax.row.php?id=308" frameborder="0" width="220" height="220"></iframe>
         </p>
            </div>
        </div>

        <div class="widget">
            <div class="widget-heading">
                <h4>Kalender Masehi-Hijriyah</h4>
            </div>
            <div class="widget-body">
                <br>
                <p style="text-align: center;">
                    <iframe src="https://www.jadwalsholat.org/hijri/hijri.php" frameborder="0" width="280" height="263"></iframe>
                    <br>
                    <br>
                    <span style="color: #ff0000;">Perhitungan pada sistem konversi Masehi – Hijriah ini memungkinkan terjadi selisih H-1 atau H+1 dari tanggal seharusnya untuk tanggal Hijriyah</span>
                </p>
            </div>
        </div>

    </aside>
</div>