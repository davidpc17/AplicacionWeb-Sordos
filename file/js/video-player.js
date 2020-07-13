var player = videojs('videoPlayer', {

    autoplay: 'muted',
    controls: true,
    loop: true,
/*     width: '540',
    height: '220', */
    fluid: true,
    aspectRatio: '4:3',
    playbackRtes: [0.25, 0.5, 1, 1.5, 2, 2.5, 3, 3.5, 4],
    userActions: {
    hotkeys: true
    }

});
