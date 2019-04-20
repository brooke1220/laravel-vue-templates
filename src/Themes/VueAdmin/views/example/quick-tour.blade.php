@example

   <b-breadcrumb>
        <li class="breadcrumb-item"><a href="/" target="_self" class="">Home</a></li>
        <li class="breadcrumb-item"><a href="/example" target="_self" class="">Example</a></li>
        <li class="breadcrumb-item active"><span>Quick Tour</span></li>
    </b-breadcrumb>

    <el-row class="mt-3">
        <el-card shadow="hover">
            <div slot="header">
                <span>Chart</span>
            </div>

            <chart-line height="400px" smooth="false" x-name="xAxis" y-name="yAxis">
                {
                "ref": ["13:00", "13:05", "13:10", "13:15", "13:20", "13:25", "13:30", "13:35", "13:40", "13:45",
                "13:50",
                "13:55"],
                "CMCC": [220, 182, 191, 134, 150, 120, 110, 125, 145, 122, 165, 122],
                "CTCC": [120, 110, 125, 145, 122, 165, 122, 220, 182, 191, 134, 150],
                "CUCC": [220, 182, 125, 15, 122, 191, 134, 150, 120, 110, 165, 122]
                }
            </chart-line>
        </el-card>
    </el-row>

    <el-row class="mt-3">
        <el-col :span="12">
            <el-card shadow="hover">
                <div slot="header">
                    <span>Form</span>
                </div>

                <fm-form action="/upload" method="post" size="small">
                    @csrf
                    <el-form-item label="Name">
                        <fm-input name="name"></fm-input>
                    </el-form-item>
                    <el-form-item label="Gender">
                        <fm-radio checked="0">
                            <el-radio name="gender" label="0" border>Male</el-radio>
                            <el-radio name="gender" label="1" border>Female</el-radio>
                        </fm-radio>
                    </el-form-item>
                    <el-form-item label="Birth">
                        <fm-date name="birth" type="datetime"></fm-date>
                    </el-form-item>
                    <el-form-item label="Hometown">
                        <fm-select name="hometown">
                            <el-option value="Washington" label="Washington">Washington</el-option>
                            <el-option value="Chicago" label="Chicago">Chicago</el-option>
                        </fm-select>
                    </el-form-item>
                    <el-form-item label="Hobbies">
                        <fm-checkbox>
                            <el-checkbox name="code" label="Code" border checked>Code</el-checkbox>
                            <el-checkbox name="eat" label="Eat" border>Eat</el-checkbox>
                        </fm-checkbox>
                    </el-form-item>
                    <el-form-item label="Remember Me">
                        <fm-switch name="remember" on active-color="#13ce66" inactive-color="#ff4949" active-text="Yes"
                                   inactive-text="No"></fm-switch>
                    </el-form-item>
                    <el-form-item label="Describe Yourself">
                        <text-editor name="describe" upload_url="/example/img_upload">{!! <<<'DOC'
            <p align="center">&nbsp;</p> <p align="center"><font size="4" face="arial black,sans-serif"><strong>I AM <em><font size="5" color="#FF0000" face="comic sans ms,sans-serif">HOT</font></em></strong></font></p> <p align="center">&nbsp;</p> <p align="center"><font size="4" face="arial black,sans-serif"><strong><em><font size="5" color="#FF0000" face="comic sans ms,sans-serif"><img src="/images/img.jpg" alt="" width="128" height="128" /></font></em></strong></font></p>
DOC;
; !!}</text-editor>
                    </el-form-item>
                    <el-form-item>
                        <el-button class="pull-right" type="primary" native-type="submit">Check It Out</el-button>
                    </el-form-item>
                </fm-form>
            </el-card>
        </el-col>

        <el-col :span="11" :offset="1">
            <el-card shadow="hover">
                <div slot="header">
                    <span>Notifications</span>
                </div>
                <el-button onclick="__notify(123)">Click Me</el-button>
                <el-button onclick="__confirm(123)">Click Me</el-button>
            </el-card>

            <el-card shadow="hover" class="mt-2">
                <div slot="header">
                    <span>Upload</span>
                </div>

                <el-upload name="file1" action="/file_upload" multiple drag
                           :headers="{'X-CSRF-TOKEN': '{{csrf_token()}}'}">
                    <i class="el-icon-upload"></i>
                    <div class="el-upload__text">Drop file here or <em>click to upload</em></div>

                    <div class="el-upload__tip" slot="tip">jpg/png files with a size less than 500kb</div>
                </el-upload>
            </el-card>

            <el-card shadow="hover" class="mt-2">
                <div slot="header">
                    <span>Code</span>
                </div>

                <code-json>{!! <<<'DOC'
[
 {
  _id: "post 1",
  "author": "Bob",
  "content": "...",
  "page_views": 5
 },
 {
  "_id": "post 2",
  "page_views": 9
 },
]
DOC;
; !!}</code-json>
            </el-card>

        </el-col>
    </el-row>


@endexample