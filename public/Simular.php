<?php
 require_once "../src/view/header_nav.php"; ?>
<body style="background-color:black;">

<div class="text-center">
        <h3 style="color:aliceblue">TIMES ESCOLHIDOS:</h3>
        </div>
</body>

<?php 

    if (isset($_POST['radio'])) {
        $radio = $_POST['radio'];
    } else {
        $radio = "<meta http-equiv='refresh' content='2; url=../public/Erro.php' />";
    }
////////////////////////////////////////////////////////////////////////////
//times 1
    class Times1
{
    public $premiere1;
    public $timesImg;
    public $timesV;
    public $timesS;
    public $timesJ;
    public $timesL;
    public $timesT;

}

    $times1 = new Times1;
    $timesImg = new Times1;
    $timesV = new Times1;
    $timesS = new Times1;
    $timesJ = new Times1;
    $timesN = new Times1;
    $timesL = new Times1;
    $timesT = new Times1;

    if (isset($_POST['PremiereT1'])) {
        $times1->premiere1 = $_POST['PremiereT1'];
    } else {
        $times1->premiere1 = null;
    }   

    if ($_POST['PremiereT1'] == "Manchester City") 
    {
        $timesImg->timesImg = "../img/mc.png";
        $timesV->timesV = 95.0;
        $timesS->timesS = "Manchester City"; 
        $timesT->timesT = "Josep Guardiola";
        $timesL->timesL = "https://www.google.com/search?q=city&sxsrf=ALiCzsY_oXz4ZyZ_AC7DKhYHNwm-zlnbkg%3A1653872013517&ei=jRWUYoeUH-zb1sQP4NqhiAM&gs_ssp=eJzj4tTP1TcwNDM2qTBg9GJJziypBAAluASN&oq=c&gs_lcp=Cgdnd3Mtd2l6EAEYBDIECCMQJzIECCMQJzIECCMQJzIKCC4QsQMQgwEQQzIECC4QQzIECC4QQzIHCC4QsQMQQzIECC4QQzIECAAQQzIECC4QQzoHCAAQRxCwAzoFCAAQgAQ6BQguEIAEOgYIABAeEBY6BwgjEOoCECc6CgguEMcBENEDEEM6CAgAEIAEELEDOgcILhDUAhBDOgwIABCxAxBDEEYQ_wE6CAgAELEDEIMBOg4ILhCABBCxAxDHARCvAToHCAAQgAQQCkoECEEYAEoECEYYAFDmA1iYOGCLTWgIcAF4A4AB2wGIAagRkgEGMC4xNS4xmAEAoAEBsAEKyAEIwAEB&sclient=gws-wiz#sie=t;/m/01634x;2;/m/02_tc;nw;fp;1;;";
    }

    if ($_POST['PremiereT1'] == "Chealsea") 
    {
        $timesImg->timesImg = "../img/ch.png";
        $timesV->timesV = 92.0;
        $timesS->timesS = "Chealsea"; 
        $timesT->timesT = "Thomas Tuche";
        $timesL->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/023fb;2;;mt;fp;1;;";
    }

    if ($_POST['PremiereT1'] == "Lverpool") 
    {
        $timesImg->timesImg = "../img/lv.png";
        $timesV->timesV = 92.0;
        $timesS->timesS = "Liverpool"; 
        $timesT->timesT = "Jürgen Norbert";
        $timesL->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/04ltf;2;;mt;fp;1;;";
    }

    if ($_POST['PremiereT1'] == "Tottenham") 
    {
        $timesImg->timesImg = "../img/tt.png";
        $timesV->timesV = 90.0;
        $timesS->timesS = "Tottenham"; 
        $timesT->timesT = "Antonio Conte";
        $timesL->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/0hvjr;2;;mt;fp;1;;";
    }

    if ($_POST['PremiereT1'] == "Manchester United") 
    {
        $timesImg->timesImg = "../img/mu.png";
        $timesV->timesV = 90.0;
        $timesS->timesS = "Manchester United"; 
        $timesT->timesT = "Erik Ten Hag";
        $timesL->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/050fh;2;;mt;fp;1;;";
    }

    if ($_POST['PremiereT1'] == "Arsenal") 
    {
        $timesImg->timesImg = "../img/ar.png";
        $timesV->timesV = 89.0;
        $timesS->timesS = "Arsenal"; 
        $timesT->timesT = "Josep Guardiola";
        $timesL->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/0xbm;2;;mt;fp;1;;";
    }

    if ($_POST['PremiereT1'] == "West Ham") 
    {
        $timesImg->timesImg = "../img/hw.png";
        $timesV->timesV = 87.0;
        $timesS->timesS = "Wast H"; 
        $timesT->timesT = "David William Moyes";
        $timesL->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/0ckf6;2;;mt;fp;1;;";
    }

    if ($_POST['PremiereT1'] == "Leicester City") 
    {
        $timesImg->timesImg = "../img/lc.png";
        $timesV->timesV = 85.0;
        $timesS->timesS = "Leicester City"; 
        $timesT->timesT = "Brendan Rodgers";
        $timesL->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/01rlzn;2;;mt;fp;1;;";
    }
        if ($_POST['PremiereT1'] == "Brighton") 
        {
            $timesImg->timesImg = "../img/br.png";
            $timesV->timesV = 84.0;
            $timesS->timesS = "Brighton"; 
            $timesT->timesT = "Graham Stephen Potter";
            $timesL->timesL = "href:https:'https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/0j2pg;2;;mt;fp;1;;";
        }

        if ($_POST['PremiereT1'] == "Wolves") 
        {
            $timesImg->timesImg = "../img/wo.png";
            $timesV->timesV = 83.0;
            $timesS->timesS = "Wolves"; 
            $timesT->timesT = "Brono Lage";
            $timesL->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/01fwqn;2;;mt;fp;1;;";
        }

        if ($_POST['PremiereT1'] == "Newcastle") 
        {
            $timesImg->timesImg = "../img/nc.png";
            $timesV->timesV = 82.0;
            $timesS->timesS = "Newcastle"; 
            $timesT->timesT = "Eddie Howe";
            $timesL->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/0fvly;2;;mt;fp;1;;";
        }

        if ($_POST['PremiereT1'] == "Crystal Palace") 
        {
            $timesImg->timesImg = "../img/cp.png";
            $timesV->timesV = 81.0;
            $timesS->timesS = "Crystal Palace"; 
            $timesT->timesT = "Patrick Donalé Vieira";
            $timesL->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/0223bl;2;;mt;fp;1;;";
        }

        if ($_POST['PremiereT1'] == "Brentford") 
        {
            $timesImg->timesImg = "../img/br.png";
            $timesV->timesV = 80.0;
            $timesS->timesS = "Brentford"; 
            $timesT->timesT = "Thomas Frank";
            $timesL->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/02b0y3;2;;mt;fp;1;;";
        }

        if ($_POST['PremiereT1'] == "Aston Villa") 
        {
            $timesImg->timesImg = "../img/av.png";
            $timesV->timesV = 80.0;
            $timesS->timesS = "Aston Villa"; 
            $timesT->timesT = "Steven George Gerrard";
            $timesL->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/0bl8l;2;;mt;fp;1;;";
        }

        if ($_POST['PremiereT1'] == "Southamptom") 
        {
            $timesImg->timesImg = "../img/so.png";
            $timesV->timesV = 81.0;
            $timesS->timesS = "Southamptom"; 
            $timesT->timesT = "Ralph Hasenhüttl";
            $timesL->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/0k_l4;2;;mt;fp;1;;";
        }

        if ($_POST['PremiereT1'] == "Everton") 
        {
            $timesImg->timesImg = "../img/ev.png";
            $timesV->timesV =  86.0;
            $timesS->timesS = "Everton"; 
            $timesT->timesT = "Frank James Lampard";
            $timesL->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/0mmd6;2;;mt;fp;1;;";
        }

        if ($_POST['PremiereT1'] == "Leeds") 
        {
            $timesImg->timesImg = "../img/lu.png";
            $timesV->timesV = 79.0;
            $timesS->timesS = "Leeds"; 
            $timesT->timesT = "Jesse Alan Marsch";
            $timesL->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/01xn7x1;2;;mt;fp;1;;";
        }

        if ($_POST['PremiereT1'] == "Burnley") 
        {
            $timesImg->timesImg = "../img/bu.png";
            $timesV->timesV = 85.0;
            $timesS->timesS = "Burnley"; 
            $timesT->timesT = "Sean Mark Dyche";
            $timesL->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/0212mp;2;;mt;fp;1;;";
        }

        if ($_POST['PremiereT1'] == "Waltford") 
        {
            $timesImg->timesImg = "../img/wa.png";
            $timesV->timesV = 78.0;
            $timesS->timesS = "Waltford"; 
            $timesT->timesT = "Roy Hodgson";
            $timesL->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/0lmm3;2;;mt;fp;1;;";
        }

        if ($_POST['PremiereT1'] == "Norwich") 
        {
            $timesImg->timesImg = "../img/no.png";
            $timesV->timesV = 79.0;
            $timesS->timesS = "Norwich"; 
            $timesT->timesT = "Dean Smith";
            $timesL->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/01kwhf;2;;mt;fp;1;;";
        }
////////////////////////////////////////////////////////////    
//times2
class Times2
{
    public $premiereT2;
    public $timesImg;
    public $timesV;
    public $timesS;
    public $timesJ;
    public $timesL;
    public $timesT;
}
$timesT2 = new Times2;
$timesImg2 = new Times2;
$timesV2 = new Times2;
$timesS2 = new Times2;
$timesJ2 = new Times2;
$timesN2 = new Times2;
$timesL2 = new Times2;
$timesT2 = new Times2;

if (isset($_POST['PremiereT2'])) {
    $timesT2->premiereT2 = $_POST['PremiereT2'];
} else {
    $timesT2->premiereT2 = null;
}
//var_dump($times1);
//var_dump($timesT2);
if ($_POST['PremiereT2'] == "Manchester City") 
{
    $timesImg2->timesImg = "../img/mc.png";
    $timesV2->timesV = 95.0;
    $timesS2->timesS = "Manchester City"; 
    $timesT2->timesT = "Josep Guardiola";
    $timesL2->timesL = "https://www.google.com/search?q=city&sxsrf=ALiCzsY_oXz4ZyZ_AC7DKhYHNwm-zlnbkg%3A1653872013517&ei=jRWUYoeUH-zb1sQP4NqhiAM&gs_ssp=eJzj4tTP1TcwNDM2qTBg9GJJziypBAAluASN&oq=c&gs_lcp=Cgdnd3Mtd2l6EAEYBDIECCMQJzIECCMQJzIECCMQJzIKCC4QsQMQgwEQQzIECC4QQzIECC4QQzIHCC4QsQMQQzIECC4QQzIECAAQQzIECC4QQzoHCAAQRxCwAzoFCAAQgAQ6BQguEIAEOgYIABAeEBY6BwgjEOoCECc6CgguEMcBENEDEEM6CAgAEIAEELEDOgcILhDUAhBDOgwIABCxAxBDEEYQ_wE6CAgAELEDEIMBOg4ILhCABBCxAxDHARCvAToHCAAQgAQQCkoECEEYAEoECEYYAFDmA1iYOGCLTWgIcAF4A4AB2wGIAagRkgEGMC4xNS4xmAEAoAEBsAEKyAEIwAEB&sclient=gws-wiz#sie=t;/m/01634x;2;/m/02_tc;nw;fp;1;;";
}

if ($_POST['PremiereT2'] == "Chealsea") 
{
    $timesImg2->timesImg = "../img/ch.png";
    $timesV2->timesV = 92.0;
    $timesS2->timesS = "Chealsea"; 
    $timesT2->timesT = "Thomas Tuche";
    $timesL2->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/023fb;2;;mt;fp;1;;";
}

if ($_POST['PremiereT2'] == "Lverpool") 
{
    $timesImg2->timesImg = "../img/lv.png";
    $timesV2->timesV = 92.0;
    $timesS2->timesS = "Liverpool"; 
    $timesT2->timesT = "Jürgen Norbert";
    $timesL2->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/04ltf;2;;mt;fp;1;;";
}

if ($_POST['PremiereT2'] == "Tottenham") 
{
    $timesImg2->timesImg = "../img/tt.png";
    $timesV2->timesV = 90.0;
    $timesS2->timesS = "Tottenham"; 
    $timesT2->timesT = "Antonio Conte";
    $timesL2->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/0hvjr;2;;mt;fp;1;;";
}

if ($_POST['PremiereT2'] == "Manchester United") 
{
    $timesImg2->timesImg = "../img/mu.png";
    $timesV2->timesV = 90.0;
    $timesS2->timesS = "Manchester United"; 
    $timesT2->timesT = "Erik Ten Hag";
    $timesL2->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/050fh;2;;mt;fp;1;;";
}

if ($_POST['PremiereT2'] == "Arsenal") 
{
    $timesImg2->timesImg = "../img/ar.png";
    $timesV2->timesV = 89.0;
    $timesS2->timesS = "Arsenal"; 
    $timesT2->timesT = "Josep Guardiola";
    $timesL2->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/0xbm;2;;mt;fp;1;;";
}

if ($_POST['PremiereT2'] == "West Ham") 
{
    $timesImg2->timesImg = "../img/hw.png";
    $timesV2->timesV = 87.0;
    $timesS2->timesS = "Wast H"; 
    $timesT2->timesT = "David William Moyes";
    $timesL2->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/0ckf6;2;;mt;fp;1;;";
}

if ($_POST['PremiereT2'] == "Leicester City") 
{
    $timesImg2->timesImg = "../img/lc.png";
    $timesV2->timesV = 85.0;
    $timesS2->timesS = "Leicester City"; 
    $timesT2->timesT = "Brendan Rodgers";
    $timesL2->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/01rlzn;2;;mt;fp;1;;";
}
    if ($_POST['PremiereT2'] == "Brighton") 
    {
        $timesImg2->timesImg = "../img/br.png";
        $timesV2->timesV = 84.0;
        $timesS2->timesS = "Brighton"; 
        $timesT2->timesT = "Graham Stephen Potter";
        $timesL2->timesL = "href:https:'https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/0j2pg;2;;mt;fp;1;;";
    }

    if ($_POST['PremiereT2'] == "Wolves") 
    {
        $timesImg2->timesImg = "../img/wo.png";
        $timesV2->timesV = 83.0;
        $timesS2->timesS = "Wolves"; 
        $timesT2->timesT = "Brono Lage";
        $timesL2->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/01fwqn;2;;mt;fp;1;;";
    }

    if ($_POST['PremiereT2'] == "Newcastle") 
    {
        $timesImg2->timesImg = "../img/nc.png";
        $timesV2->timesV = 82.0;
        $timesS2->timesS = "Newcastle"; 
        $timesT2->timesT = "Eddie Howe";
        $timesL2->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/0fvly;2;;mt;fp;1;;";
    }

    if ($_POST['PremiereT2'] == "Crystal Palace") 
    {
        $timesImg2->timesImg = "../img/cp.png";
        $timesV2->timesV = 81.0;
        $timesS2->timesS = "Crystal Palace"; 
        $timesT2->timesT = "Patrick Donalé Vieira";
        $timesL2->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/0223bl;2;;mt;fp;1;;";
    }

    if ($_POST['PremiereT2'] == "Brentford") 
    {
        $timesImg2->timesImg = "../img/br.png";
        $timesV2->timesV = 80.0;
        $timesS2->timesS = "Brentford"; 
        $timesT2->timesT = "Thomas Frank";
        $timesL2->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/02b0y3;2;;mt;fp;1;;";
    }

    if ($_POST['PremiereT2'] == "Aston Villa") 
    {
        $timesImg2->timesImg = "../img/av.png";
        $timesV2->timesV = 80.0;
        $timesS2->timesS = "Aston Villa"; 
        $timesT2->timesT = "Steven George Gerrard";
        $timesL2->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/0bl8l;2;;mt;fp;1;;";
    }

    if ($_POST['PremiereT2'] == "Southamptom") 
    {
        $timesImg2->timesImg = "../img/so.png";
        $timesV2->timesV = 81.0;
        $timesS2->timesS = "Southamptom"; 
        $timesT2->timesT = "Ralph Hasenhüttl";
        $timesL2->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/0k_l4;2;;mt;fp;1;;";
    }

    if ($_POST['PremiereT2'] == "Everton") 
    {
        $timesImg2->timesImg = "../img/ev.png";
        $timesV2->timesV =  86.0;
        $timesS2->timesS = "Everton"; 
        $timesT2->timesT = "Frank James Lampard";
        $timesL2->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/0mmd6;2;;mt;fp;1;;";
    }

    if ($_POST['PremiereT2'] == "Leeds") 
    {
        $timesImg2->timesImg = "../img/lu.png";
        $timesV2->timesV = 79.0;
        $timesS2->timesS = "Leeds"; 
        $timesT2->timesT = "Jesse Alan Marsch";
        $timesL2->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/01xn7x1;2;;mt;fp;1;;";
    }

    if ($_POST['PremiereT2'] == "Burnley") 
    {
        $timesImg2->timesImg = "../img/bu.png";
        $timesV2->timesV = 85.0;
        $timesS2->timesS = "Burnley"; 
        $timesT2->timesT = "Sean Mark Dyche";
        $timesL2->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/0212mp;2;;mt;fp;1;;";
    }

    if ($_POST['PremiereT2'] == "Waltford") 
    {
        $timesImg2->timesImg = "../img/wa.png";
        $timesV2->timesV = 78.0;
        $timesS2->timesS = "Waltford"; 
        $timesT2->timesT = "Roy Hodgson";
        $timesL2->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/0lmm3;2;;mt;fp;1;;";
    }

    if ($_POST['PremiereT2'] == "Norwich") 
    {
        $timesImg2->timesImg = "../img/no.png";
        $timesV2->timesV = 79.0;
        $timesS2->timesS = "Norwich"; 
        $timesT2->timesT = "Dean Smith";
        $timesL2->timesL = "https://www.google.com/search?q=premier+league&sxsrf=ALiCzsbIqIw0SDqKQHUn6RwCfThuDfK7Dw%3A1653875409810&ei=0SKUYu2HMYKF1sQPmou8YA&oq=premiere+lea&gs_lcp=Cgdnd3Mtd2l6EAMYATIHCCMQsQIQJzIHCCMQsQIQJzIHCCMQsQIQJzIHCC4QsQMQCjINCC4QsQMQgwEQ1AIQCjIICAAQsQMQgwEyCggAELEDEIMBEAoyCAgAELEDEIMBMgoIABCxAxCDARAKMgcIABCxAxAKOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOgwILhDIAxCwAxBDGAI6BAgAEEM6CAgAEIAEELEDOgUIABCABEoECEEYAEoECEYYAVDhAVjJC2DBIGgBcAF4AIABkgGIAZAEkgEDMC40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz#sie=t;/m/01kwhf;2;;mt;fp;1;;";
    }
    //var_dump($timesImg);
    //var_dump($timesImg2);
?>
<br><br>
    <form method="post" action="Final.php">
        <p>
        <img src="<?= $timesImg2->timesImg ?>" alt="Time escudo" width="500" height="333" style="border:50px solid black">
        <img src="<?= $timesImg->timesImg ?>" alt="Time escudo" width="500" height="333" style="border:50px solid black; float:right">
    <div class="containerNew">
        <div class="container">
            <h3 style="font-family: 'Courier New', Courier, monospace; padding: auto; color:green; " >TIME:</h3>
            <h2 style="color:aliceblue; "> <?= $timesS2->timesS ?> </h2>
            <h3 style="font-family: 'Courier New', Courier, monospace; padding: auto; color:green; " >TECNICO:</h3>
            <h2 style="color:aliceblue; "> <?= $timesT2->timesT ?> </h2>
            <h3 style="font-family: 'Courier New', Courier, monospace; padding: auto; color:green; " >OUVER</h3>
            <h2 style="color:aliceblue; " name="V"> <?= $timesV2->timesV ?> </h2>
            <!-- Envio escondido -->
            <input type="hidden" value="<?= $timesV->timesV ?>" name="v" />

            <a href="<?= $timesL2->timesL ?>" target="_blank">INFORMAÇÕES SOBRE O TIME</a>
        </div>
        <div class="container_1">
            
            <h3 style="font-family: 'Courier New', Courier, monospace; padding: auto; color:green;" >TIME:</h3>
            <h2 style="color:aliceblue"> <?= $timesS->timesS ?> </h2>
            <h3 style="font-family: 'Courier New', Courier, monospace; padding: auto; color:green;" >TECNICO:</h3>
            <h2 style="color:aliceblue"> <?= $timesT->timesT ?> </h2>
            <h3 style="font-family: 'Courier New', Courier, monospace; padding: auto; color:green; " >OUVER</h3>
            <h2 style="color:aliceblue; " name="V"> <?= $timesV->timesV ?> </h2>
            <input type="hidden" value="<?php $timesV2->timesV ?>" name="v2" />

            <a href="<?= $timesL->timesL ?>" target="_blank">INFORMAÇÕES SOBRE O TIME</a>
        </div>
            </p>
            </div> 
        <div class="row">
            <button type="submit" class="btn btn-success col-3 offset-3" >INCIAR</button>
            
            </div>
       
        </form>
    </body>