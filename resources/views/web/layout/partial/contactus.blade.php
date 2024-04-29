<div class="work-with-us">
                <div class="container">
                    <div class="work-with-us-box">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-12">
                                <div class="work-with-us-left">
                                    <img src="{{ asset('assets/web/image/work-img.png') }}" alt="image">

                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-12 pl-0">
                                <div class="work-with-us-right">
                                    <p class="text-success successMessage" style="text-align:center;"></p>
                                    <p class="text-danger errorMessage" style="text-align:center;"></p>
                                    <form id="workWithUs" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-box">
                                                    <input type="name" name="name" id="name" placeholder="Name">
                                                    <p class="text-danger name"></p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-box">
                                                    <input type="email" name="email" id="email" placeholder="Email Address">
                                                    <p class="text-danger email"></p>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-box">
                                                    <textarea name="message" id="message" rows="3" placeholder="Message"></textarea>
                                                    <p class="text-danger message"></p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-box">
                                                    <div class="upload-btn-wrapper">
                                                        <button class="upload-btn">Upload a file
                                                            <img src="{{ asset('assets/web/image/upload-icon.png') }}"
                                                                alt="icon">
                                                        </button>
                                                        <input type="file" name="uploadfile"  accept="image/png, image/jpeg,image/doc,image/docx,image/jpg"/>
                                                        <p class="text-danger uploadfile"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-right">
                                                <button type="button" class="submit-btn workWithUs">SUBMIT</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>