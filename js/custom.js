    var userFeed = new Instafeed({
        get: 'user',
        userId: '241684291',
        limit: 12,
        resolution: 'standard_resolution',
        accessToken: '241684291.1677ed0.ae3aad5be1f5476eb76002d0b16f4747',
        sortBy: 'most-recent',
        template: '<div class="col-lg-1 instaimg"><a href="{{link}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });


    userFeed.run();
