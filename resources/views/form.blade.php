<style>
    body {
        background-color: #0ed145;
        text-align: center;
    }
    </style>

<form action="/form" method="POST" novalidate>
    @csrf

<html lang = "ja">
    <head>
        <title>form</title>
    </head>
    <body>
        <input type="radio" name = "gender" value = "male">男性
        <input type="radio" name = "gender" value = "female">女性<br>
        生年月日：
        <select name = "yaer">
            <option value = "2020">2020年</option>
            <option value = "2019">2019年</option>
            <option value = "2018">2018年</option>
            <option value = "2017">2017年</option>
            <option value = "2016">2016年</option>
            <option value = "2015">2015年</option>
            <option value = "2014">2014年</option>
            <option value = "2013">2013年</option>
            <option value = "2012">2012年</option>
            <option value = "2011">2011年</option>
            <option value = "2010">2010年</option>
            <option value = "2009">2009年</option>
            <option value = "2008">2008年</option>
            <option value = "2007">2007年</option>
            <option value = "2006">2006年</option>
            <option value = "2005">2005年</option>
            <option value = "2004">2004年</option>
            <option value = "2003">2003年</option>
            <option value = "2002">2002年</option>
            <option value = "2001">2001年</option>
            <option value = "2000">2000年</option>
            <option value = "1999">1999年</option>
            <option value = "1998">1998年</option>
            <option value = "1997">1997年</option>
            <option value = "1996">1996年</option>
            <option value = "1995">1995年</option>
            <option value = "1994">1994年</option>
            <option value = "1993">1993年</option>
            <option value = "1992">1992年</option>
            <option value = "1991">1991年</option>
            <option value = "1990">1990年</option>
            <option value = "1989">1989年</option>
            <option value = "1988">1988年</option>
            <option value = "1987">1987年</option>
            <option value = "1986">1986年</option>
            <option value = "1985">1985年</option>
            <option value = "1984">1984年</option>
            <option value = "1983">1983年</option>
            <option value = "1982">1982年</option>
            <option value = "1981">1981年</option>
            <option value = "1980">1980年</option>
            <option value = "1979">1979年</option>
            <option value = "1978">1978年</option>
            <option value = "1977">1977年</option>
            <option value = "1976">1976年</option>
            <option value = "1975">1975年</option>
            <option value = "1974">1974年</option>
            <option value = "1973">1973年</option>
            <option value = "1972">1972年</option>
            <option value = "1971">1971年</option>
            <option value = "1970">1970年</option>
            <option value = "1969">1969年</option>
            <option value = "1968">1968年</option>
            <option value = "1967">1967年</option>
            <option value = "1966">1966年</option>
            <option value = "1965">1965年</option>
            <option value = "1964">1964年</option>
            <option value = "1963">1963年</option>
            <option value = "1962">1962年</option>
            <option value = "1961">1961年</option>
            <option value = "1960">1960年</option>
        </select>
        (満
        <input type = "text" size = "1" name = "old">歳)
    </body>
</html>
</form>
