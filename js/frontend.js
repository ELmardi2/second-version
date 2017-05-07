$(function() {
  "use strict";
                              //Switch Between login & signUp
              $('.login-page h1 span').click(function () {

                                $('login').addClass('selected').siblings().addClass('signup');
                                $('.login-page form').hide(200);
                                $('.' + $(this).data('class')).fadeIn(100);
                  });
                    //Trigger SelectBoxIT
                            $("select").selectBoxIt({
                              autoWidth: false
                            });

                    //Hide placeholder on form focus
                              $('[placeholder]').focus(function () {
                                            $(this).attr('data-text', $(this).attr('placeholder'));
                                            $(this).attr('placeholder', '');
                                          }).blur(function () {
                                $(this).attr('placeholder', $(this).attr('data-text'));
                              });
                              //add star for required feild
                                    $('input').each(function() {
                                      if($(this).attr('required') === 'required'){
                                        $(this).after('<span class="asterisk">*</span>')
                                      }
                                   });
                              //confirmation Delete
                              $('.confirm').click(function () {
                                      return confirm('Are You sure!?');
                              });
                                        $('.live').keyup(function () {

                                      $(($(this).data('class'))).text($(this).val());
                                        });

});
