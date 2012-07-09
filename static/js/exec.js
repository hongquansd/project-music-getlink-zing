var logout, searchKeyPress, search, userLikeSong, userLikePlaylist, userLikeMV, 
     postComment, setBodyWidth, userNotLogin ;

var getIndex, setActiveSong, showSongPlaylist, showRelatedPlaylist, setActiveTag, showRelatedSong, showLyric, ShowMorePlayList;


search = function() {
    var key = document.getElementById("txtSearchkey").value;    
    key = encodeURIComponent(key).replace(/%20/g,"+");
    window.location = "/tim_kiem?q="+ key;
};

searchSubKey = function () {
    var key = document.getElementById("txtSearchSubkey").value;
    key = encodeURIComponent(key).replace(/%20/g, "+");
    window.location = "/tim_kiem?q=" + key;
};

searchKeyPress = function(e) {   
    if (e.keyCode == 13) {
            search();            
            return false;
        }
    };
searchSubKeyPress = function (e) {
    if (e.keyCode == 13) {
        searchSubKey();
        return false;
    }
};

userLikeSong = function (type) {
    var songLike = document.getElementById('hdSong').value;
    var urlCallback = document.getElementById('hdUrlCallback').value; 
    var html;

    if (songLike.length < 0) {
        alert("Bài hát không tồn tại");
        return;
    }
    var inputLike = document.getElementById("btnLiked");
    if (type == 'like') {
        inputLike.value = "Hết thích";
        inputLike.setAttribute('onclick', 'userLikeSong("unlike");return false;');
    }
    else {
        inputLike.value = "Thích";
        inputLike.setAttribute('onclick', 'userLikeSong("like");return false;');
    }

    ajax.load('/api/wap.ashx?action=userLikeSong&song=' + songLike, function (data) {
        if (data.notlogin) {
            inputLike.value = 'Thích';
            inputLike.setAttribute('onclick', 'userLikeSong("like");return false;');
            document.getElementById("notlogin").innerHTML = (urlCallback.length > 0) ? 'Bạn phải <a href="/dang_nhap?r='+urlCallback+'">đăng nhập </a> để sử dụng chức năng này.' : 'Bạn phải <a href="/dang_nhap">đăng nhập </a> để sử dụng chức năng này.';
            document.getElementById("notlogin").style.display = "block";
            return;
        }
        else {
            document.getElementById("notlogin").style.display = "none";
            document.getElementById("notlogin").innerHTML = "";
            if (data.result == "unlike") {
                inputLike.value = 'Hết Thích';
                inputLike.setAttribute('onclick', 'userLikeSong("unlike");return false;');
            }
            else if (data.result == "like") {
                inputLike.value = 'Thích';
                inputLike.setAttribute('onclick', 'userLikeSong("like");return false;');
            }
        }
    }, 'json', 'post');
};

userLikePlaylist = function (type) {
    var listLike = document.getElementById('hdPlaylist').value;
    var urlCallback = document.getElementById('hdUrlCallback').value; 
    var html;

    if (listLike.length < 0) {
        alert("Playlist không tồn tại");
        return;
    }
    var inputLike = document.getElementById("btnLiked");
    if (type == 'like') {
        inputLike.value = "Hết thích";
        inputLike.setAttribute('onclick', 'userLikePlaylist("unlike");return false;');
    }
    else {
        inputLike.value = "Thích";
        inputLike.setAttribute('onclick', 'userLikePlaylist("like");return false;');
    }
    ajax.load('/api/wap.ashx?action=userLikePlaylist&listkey=' + listLike, function (data) {
        if (data.notlogin) {
            inputLike.value = 'Thích';
            inputLike.setAttribute('onclick', 'userLikePlaylist("like");return false;');
            document.getElementById("notlogin").innerHTML = (urlCallback.length > 0) ? 'Bạn phải <a href="/dang_nhap?r=' + urlCallback + '">đăng nhập </a> để sử dụng chức năng này.' : 'Bạn phải <a href="/dang_nhap">đăng nhập </a> để sử dụng chức năng này.';
            document.getElementById("notlogin").style.display = "block";
            return;
        }
        else {
            document.getElementById("notlogin").style.display = "none";
            document.getElementById("notlogin").innerHTML = "";
            if (data.result == "unlike") {
                inputLike.value = 'Hết Thích';
                inputLike.setAttribute('onclick', 'userLikePlaylist("unlike");return false;');
            }
            else if (data.result == "like") {
                inputLike.value = 'Thích';
                inputLike.setAttribute('onclick', 'userLikePlaylist("like");return false;');
            }
        }
    }, 'json', 'post');
};

userLikeMV = function (type) {
    var songLike = document.getElementById('hdSong').value;
    var urlCallback = document.getElementById('hdUrlCallback').value; 
    var html;

    if (songLike.length < 0) {
        alert("MV không tồn tại");
        return;
    }
    var inputLike = document.getElementById("btnLiked");
    if (type == 'like') {
        inputLike.value = "Hết thích";
        inputLike.setAttribute('onclick', 'userLikeMV("unlike");return false;');
    }
    else {
        inputLike.value = "Thích";
        inputLike.setAttribute('onclick', 'userLikeMV("like");return false;');
    }

    ajax.load('/api/wap.ashx?action=userLikeMV&song=' + songLike, function (data) {
        if (data.notlogin) {
            inputLike.value = 'Thích';
            inputLike.setAttribute('onclick', 'userLikeMV("like");return false;');
            document.getElementById("notlogin").innerHTML = (urlCallback.length > 0) ? 'Bạn phải <a href="/dang_nhap?r=' + urlCallback + '">đăng nhập </a> để sử dụng chức năng này.' : 'Bạn phải <a href="/dang_nhap">đăng nhập </a> để sử dụng chức năng này.';
            document.getElementById("notlogin").style.display = "block";
            return;
        }
        else {
            document.getElementById("notlogin").style.display = "none";
            document.getElementById("notlogin").innerHTML = "";
            if (data.result == "unlike") {
                inputLike.value = 'Hết Thích';
                inputLike.setAttribute('onclick', 'userLikeMV("unlike");return false;');
            }
            else if (data.result == "like") {
                inputLike.value = 'Thích';
                inputLike.setAttribute('onclick', 'userLikeMV("like");return false;');
            }
        }
    }, 'json', 'post');
};


postComment =function()
{
    document.getElementById('related').className = 'related';
    document.getElementById('lyric').className = 'lyric';
    document.getElementById('comment').className = 'comment active';
    document.getElementById("content-result").innerHTML = "<br /> Chức năng đang cập nhật";
};

userNotLogin = function()
{
   var backlink =  document.getElementById('hdbacklink').value;
   document.getElementById("pLoginError").innerHTML = 'Bạn hãy <a href="/dang_nhap?r='+backlink+'">đăng nhập</a> để thích bài hát.';
    return;
};

//------------------------------------------
function setCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    }
    else var expires = "";
    document.cookie = name + "=" + value + expires + "; domain=nhaccuatui.com; path=/";
};

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
};

function deleteCookie(name) {
    setCookie(name, "", -1);
};

var isiPhone = function() {
    return (
        (navigator.platform.toLowerCase().indexOf("iphone") != -1) ||
        (navigator.platform.toLowerCase().indexOf("ipod") != -1)
    );
};

var isAndroid = function() {
    return (
    	(navigator.userAgent.toLowerCase().indexOf("android") != -1) || 
        (navigator.platform.toLowerCase().indexOf("android") != -1)
    );
};

var checkMobile = function() {
	//deleteCookie("CheckMobileForApp");
    if (getCookie("CheckMobileForApp") == null)
        setCookie("CheckMobileForApp", "true", 30);
    else
        return;

	var appInstall = function(text, url)
	{
		var _c = confirm(text);
		if (_c == true)
		{
			window.location = url;
		}
	};
    
    if (isiPhone()) {
        appInstall('NhacCuaTui đã có trên điện thoại iPhone. Bấm OK để tải ứng dụng từ AppStore.', 'http://itunes.apple.com/vn/app/nhaccuatui/id433852509?mt=8');
    }
    else if (isAndroid()) {
        appInstall('NhacCuaTui đã có trên điện thoại Android. Bấm OK để tải ứng dụng từ Android Market.', 'https://market.android.com/details?id=ht.nct');            
    }
};

var getIndex = function () {
    var list = document.getElementById('listSong').getElementsByTagName('div');
    for (i = 0; i < list.length; i++) {
       
        if (list[i].className == "row active")
            return i;
    }
};

var setActiveSong = function (index) {
    if (index != 'undefined') {
        var list = document.getElementById('listSong').getElementsByTagName('div');
        for (i = 0; i < list.length; i++) {
            if (i == index)
                list[i].className = "row active";
            else {
                list[i].className =(i!= list.length -1 )? "row" : "row noborder";
            }
        }
    }
};

var showSongPlaylist = function (obj) {

    setActiveTag("tag-playlist", "a", obj);
    var contentSong = document.getElementById('songList');
    var contentRelated = document.getElementById('relaredList');

    if (contentSong != 'undefined' && contentRelated != 'undefined') {
        contentSong.style.display = "block";
        contentRelated.style.display = "none";
    }
    return false;
};

var showRelatedPlaylist = function (obj) {
    
    setActiveTag("tag-playlist", "a", obj);
    var contentSong = document.getElementById('songList');
    var contentRelated = document.getElementById('relaredList');

    if (contentSong != 'undefined' && contentRelated != 'undefined') {
        contentSong.style.display = "none";
        contentRelated.style.display = "block";
    }
    return false;
};

var setActiveTag = function (contentTag,elementChild, currentTag) {
    var tag = document.getElementById(contentTag).getElementsByTagName(elementChild);
    if (tag != null) {
        for (var i = 0; i < tag.length; i++) {
            tag[i].className = (currentTag.innerHTML == tag[i].innerHTML) ? "active" : "";
        }
    } 
};


var showRelatedSong = function (obj) {
    
    setActiveTag("tag-song", "a", obj);
    var contentSong = document.getElementById('relatedSong');
    var contentLyric = document.getElementById('lyricSong');
    if (contentSong != 'undefined' && contentLyric != 'undefined') {
        contentSong.style.display = "block";
        contentLyric.style.display = "none";
    }
    return false;
};

var showLyric = function (obj) {
    
    setActiveTag("tag-song", "a", obj);
    var contentSong = document.getElementById('relatedSong');
    var contentLyric = document.getElementById('lyricSong');

    if (contentSong != 'undefined' && contentLyric != 'undefined') {
        contentSong.style.display = "none";
        contentLyric.style.display = "block";
    }
    return false;
};

var ShowMorePlayList = function () {
    var el = document.getElementById("listSong");
    if (el != null) {
        el.removeAttribute("style");
        document.getElementById("lMorelist").style.display = "none";
    }
    return false;
};

checkMobile();