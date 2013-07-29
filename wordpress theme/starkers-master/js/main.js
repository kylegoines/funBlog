            var keep = $(document).height();

            var num = 100;



            $('.sidebar').height(keep+num);

            $(window).resize(function(){

                var newHeight = $('.subWrapper').height();
                var docWidth = $('.subWrapper').innerWidth();
                $('.sidebar').height(0);
                
                $('.sidebar').height(newHeight+num+num);

                //console.log('this is height '+newHeight)

                //console.log(docWidth+"this is it nromals")
                if(docWidth > 1010){
                    //console.log(docWidth+ 'reached');
                    $('.subWrapper').removeClass('pushForward')
                    $('.sidebar').removeClass('pushOpen')
                }



            })


            function push(){
                $('.sidebar').toggleClass('pushOpen');
                $('.subWrapper').toggleClass('pushForward')
            }

            $('.openButton').on('click',push);

            $('.close').on('click',push);

            /*                if(docWidth > 1024){
                    //alert('mppp')
                    $('.sidebar').removeClass('pushOpen');
                    $('.subWrapper').removeClass('pushForward')
                }

                */

