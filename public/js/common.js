$(function () {
    // hoverEvent()
    $('.serve-men').hover( function(){
        $('.serve-ul').show()
    },function(){

    })
    $('.serve-ul').hover(function(){
        $('.serve-ul').show()
    },function(){
        $('.serve-ul').hide()
    })
    //课程--课程类型切换
    $('.type-is').click(function () {
        let params = {}
        // 获取年份
        const yearEle = $('.year-type-is')
        for (var i = 0; i < yearEle.length; i++) {
            if (yearEle[i].className.indexOf('t-active') != -1) {
                const yearId = yearEle[i].getAttribute('data-val')
                if (yearId) {
                    params.year_id = yearId;
                }
            }
        }

        // 获取专业类型
        const professionEle = $('.profession-type-is')
        for (var i = 0; i < professionEle.length; i++) {
            if (professionEle[i].className.indexOf('t-active') != -1) {
                const professionId = professionEle[i].getAttribute('data-val');
                if (professionId){
                    params.profession_id = professionId
                }
            }
        }
        if (!$(this).hasClass('t-active')) {
            $('.type-is').siblings().removeClass('t-active')
            params.course_id = $(this).attr("data-val")
            getRacData({ type: 'course', request: params })
            $(this).addClass("t-active")
        }
    })

    //课程--专业 切换
    $('.profession-type-is').click(function () {
        let params = {}
        //获取课程类型
        const typeEle = $('.type-is')
        for (var i = 0; i < typeEle.length; i++) {
            if (typeEle[i].className.indexOf('t-active') != -1) {
                const courseId = typeEle[i].getAttribute('data-val')
                if (courseId){
                    params.course_id = courseId;
                }
            }
        }

        // 获取年份
        const yearEle = $('.year-type-is')
        for (var i = 0; i < yearEle.length; i++) {
            if (yearEle[i].className.indexOf('t-active') != -1) {
                const yearId = yearEle[i].getAttribute('data-val')
                if (yearId){
                    params.year_id = yearId;
                }
            }
        }
        if (!$(this).hasClass('t-active')) {
            $('.profession-type-is').siblings().removeClass('t-active')
            params.profession_id = $(this).attr("data-val")
            getRacData({ type: 'course', request: params })
            $(this).addClass("t-active")
        }
    })

    //课程--年份 切换
    $('.year-type-is').click(function () {
        let params = {}
        //获取课程类型
        const typeEle = $('.type-is')
        for (var i = 0; i < typeEle.length; i++) {
            if (typeEle[i].className.indexOf('t-active') != -1) {
                const courseId = typeEle[i].getAttribute('data-val')
                if (courseId) {
                    params.course_id = courseId;
                }
            }
        }

        // 获取专业类型
        const professionEle = $('.profession-type-is')
        for (var i = 0; i < professionEle.length; i++) {
            if (professionEle[i].className.indexOf('t-active') != -1) {
                const professionId = professionEle[i].getAttribute('data-val');
                if (professionId) {
                    params.profession_id = professionId
                }
            }
        }
        if (!$(this).hasClass('t-active')) {
            $('.year-type-is').siblings().removeClass('t-active')
            params.year_id = $(this).attr("data-val")
            getRacData({ type: 'course', request: params })
            $(this).addClass("t-active")
        }
    })


    //课程更换
    $('.changeCourse').click(function() {
        const params = {
            type: 'course',
            page: Math.floor(Math.random() * (10 - 2 + 1)),
            id: $('.t-active').attr("data-val")
        }
        getRacData(params)
    })
    //师资更换
    $('.changeTeacher').click(function () {
        const params = {
            type: 'teacher',
            page: Math.floor(Math.random() * (10 - 2 + 1)),
            limit: 4
        }
        getRacData(params)
    })

    //师资--专业 切换
    $('.teacher-type-is').click(function () {
        let params = {}
        //获取授课地点
        const siteEle = $('.site-type-is')
        for (var i = 0; i < siteEle.length; i++) {
            if (siteEle[i].className.indexOf('t-active') != -1) {
                const siteId = siteEle[i].getAttribute('data-val')
                if (siteId) {
                    params.site_id = siteId;
                }
            }
        }
        if (!$(this).hasClass('t-active')) {
            $('.teacher-type-is').siblings().removeClass('t-active')
            params.profession_id = $(this).attr("data-val")
            getRacData({ type: 'teacher', request: params })
            $(this).addClass("t-active")
        }
    })

    //师资--授课地点 切换
    $('.site-type-is').click(function () {
        let params = {}
        //获取 专业
        const teacherEle = $('.teacher-type-is')
        for (var i = 0; i < teacherEle.length; i++) {
            if (teacherEle[i].className.indexOf('t-active') != -1) {
                const professionId = teacherEle[i].getAttribute('data-val')
                if (professionId) {
                    params.profession_id = professionId;
                }
            }
        }
        if (!$(this).hasClass('t-active')) {
            $('.site-type-is').siblings().removeClass('t-active')
            params.site_id = $(this).attr("data-val")
            getRacData({ type: 'teacher', request: params })
            $(this).addClass("t-active")
        }
    })


    //案例 更换
    $('.changeCase').click(function ()  {
        const params = {
            type: 'case',
            page: Math.floor(Math.random() * (10 - 2 + 1)),
            limit: 6
        }
        getRacData(params)
    })

    //案例--专业 切换
    $('.case-type-is').click(function () {
        let params = {}
        //获取授课地点
        const semesterEle = $('.semester-type-is')
        for (var i = 0; i < semesterEle.length; i++) {
            if (semesterEle[i].className.indexOf('t-active') != -1) {
                const semesterId = semesterEle[i].getAttribute('data-val')
                if (semesterId) {
                    params.semester_id = semesterId;
                }
            }
        }
        if (!$(this).hasClass('t-active')) {
            $('.case-type-is').siblings().removeClass('t-active')
            params.profession_id = $(this).attr("data-val")
            getRacData({ type: 'exa', request: params })
            $(this).addClass("t-active")
        }
    })

    //案例--授课地点 切换
    $('.semester-type-is').click(function () {
        let params = {}
        //获取 专业
        const teacherEle = $('.teacher-type-is')
        for (var i = 0; i < teacherEle.length; i++) {
            if (teacherEle[i].className.indexOf('t-active') != -1) {
                const professionId = teacherEle[i].getAttribute('data-val')
                if (professionId) {
                    params.profession_id = professionId;
                }
            }
        }
        if (!$(this).hasClass('t-active')) {
            $('.semester-type-is').siblings().removeClass('t-active')
            params.semester_id = $(this).attr("data-val")
            getRacData({ type: 'exa', request: params })
            $(this).addClass("t-active")
        }
    })

    //资讯-- 
    $('.news-type-is').click(function () {
        let params = {}
        if (!$(this).hasClass('t-active')) {
            $('.news-type-is').siblings().removeClass('t-active')
            params.category_news_id = $(this).attr("data-val")
            getRacData({ type: 'news', request: params })
            $(this).addClass("t-active")
        }
    })



    //校区--专业
    $('.school-type-is').click(function () {
        let params = {}
        // 获取 国家 分类
        const countryEle = $('.country-type-is')
        for (var i = 0; i < countryEle.length; i++) {
            if (countryEle[i].className.indexOf('t-active') != -1) {
                const countryId = countryEle[i].getAttribute('data-val');
                if (countryId) {
                    params.country_id = countryId
                }
            }
        }
        // 获取 排名
        const rankingEle = $('.ranking-type-is')
        for (var i = 0; i < rankingEle.length; i++) {
            if (rankingEle[i].className.indexOf('t-active') != -1) {
                const rankingId = rankingEle[i].getAttribute('data-val')
                if (rankingId) {
                    params.ranking_id = rankingId;
                }
            }
        }
        if (!$(this).hasClass('t-active')) {
            $('.school-type-is').siblings().removeClass('t-active')
            params.profession_id = $(this).attr("data-val")
            getRacData({ type: 'school', limit: 10, request: params })
            $(this).addClass("t-active")
        }
    })

    //校区--国家 切换
    $('.country-type-is').click(function () {
        let params = {}
        // 获取 专业 分类
        const schoolEle = $('.school-type-is')
        for (var i = 0; i < schoolEle.length; i++) {
            if (schoolEle[i].className.indexOf('t-active') != -1) {
                const schoolId = schoolEle[i].getAttribute('data-val');
                if (schoolId) {
                    params.profession_id = schoolId
                }
            }
        }
        // 获取 排名
        const rankingEle = $('.ranking-type-is')
        for (var i = 0; i < rankingEle.length; i++) {
            if (rankingEle[i].className.indexOf('t-active') != -1) {
                const rankingId = rankingEle[i].getAttribute('data-val')
                if (rankingId) {
                    params.ranking_id = rankingId;
                }
            }
        }
        if (!$(this).hasClass('t-active')) {
            $('.country-type-is').siblings().removeClass('t-active')
            params.country_id = $(this).attr("data-val")
            getRacData({ type: 'school', limit:10, request: params })
            $(this).addClass("t-active")
        }
    })

    //校区-- 排名 切换
    $('.ranking-type-is').click(function () {
        let params = {}
        // 获取 专业 分类
        const schoolEle = $('.school-type-is')
        for (var i = 0; i < schoolEle.length; i++) {
            if (schoolEle[i].className.indexOf('t-active') != -1) {
                const schoolId = schoolEle[i].getAttribute('data-val');
                if (schoolId) {
                    params.profession_id = schoolId
                }
            }
        }
        // 获取 国家 分类
        const countryEle = $('.country-type-is')
        for (var i = 0; i < countryEle.length; i++) {
            if (countryEle[i].className.indexOf('t-active') != -1) {
                const countryId = countryEle[i].getAttribute('data-val');
                if (countryId) {
                    params.country_id = countryId
                }
            }
        }
        if (!$(this).hasClass('t-active')) {
            $('.ranking-type-is').siblings().removeClass('t-active')
            params.ranking_id = $(this).attr("data-val")
            getRacData({ type: 'school', limit: 10, request: params })
            $(this).addClass("t-active")
        }
    })

});

function hoverEvent(){
    //延迟加载鼠标滑过特效
    setTimeout(() => {
        $('.case-img-box').hover( function() {
            console.log($(this))
            $(this).find('.RAC').show()
        },function(){
            $(this).find('.RAC').hide()
        });
        $('.course-b').hover(function () {
            $(this).find('.course-im').addClass('course-im-hover')
            $(this).find('.course-li').addClass('course-li-hover')
            $(this).find('.course-au').children('.au-l').addClass('au-l-hover')
            //教师信息滑过
            $(this).find('.t-bttom').addClass('t-bttom-hover')
            $(this).find('.tea-lin').addClass('tea-lin-hover')
            $(this).find('.limg').addClass('limg-hover')
            //案例
            $(this).find('.ca-bottom').addClass('ca-bottom-hover')
            $(this).find('.ca-n').addClass('ca-n-hover')
        },
        function () {
            $(this).children().find('.course-im').removeClass('course-im-hover')
            $(this).find('.course-li').removeClass('course-li-hover')
            $(this).find('.course-au').children('.au-l').removeClass('au-l-hover')
            //教师信息滑过
            $(this).find('.t-bttom').removeClass('t-bttom-hover')
            $(this).find('.tea-lin').removeClass('tea-lin-hover')
            $(this).find('.limg').removeClass('limg-hover')
            //案例
            $(this).find('.ca-bottom').removeClass('ca-bottom-hover')
            $(this).find('.ca-n').removeClass('ca-n-hover')
        });
    }, 1000)
}

/** 
 * @desc 获取列表数据
*/
function getRacData( params = {type:'', page: 1, limit: 4, request: {}, append: false } ){
    if(!params.type) return
    params.page = params.page || 1
    params.limit = params.limit || 4
    params.id = params.id || 0
    let uri = ''
    if (params.request){
        Object.keys(params.request).forEach((key) => {
            uri += `&${key}=${params.request[key]}`
        })
    }
    $.ajax({
        url: `rac.php?type=${params.type}&page=${params.page}&limit=${params.limit}${uri}`,
        dataType: "html",
        type: 'get',
        success: function (res) {
            switch (params.type) {
                case 'course':
                    if (params.append){
                        $(".ajaxCourse").append(res)
                    } else {
                        $(".ajaxCourse").html(res)
                    }
                    break;
                case 'teacher':
                    $('.ajaxTeacher').html(res)
                    break;
                case 'exa':
                    $(".ajaxCase").html(res)
                    break;
                case 'news':
                    if (params.append) {
                        $(".ajaxNews").append(res)
                    } else {
                        $(".ajaxNews").html(res)
                    }
                    break;
                case 'school':
                    if (params.append) {
                        $(".ajaxSchool").append(res)
                    } else {
                        $(".ajaxSchool").html(res)
                    }
                    break;

            }
            hoverEvent()
        }
    });
}
//图片预览
window.showGallery = function (index) {
    Spotlight.show(gallery, {
        index: index,
        theme: "dark",
        control: ["autofit", "zoom"]
    });
};