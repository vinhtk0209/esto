function progress(timeleft, timetotal, $element) {
    var progressBarWidth = (timeleft * $element.width()) / timetotal;
    $element
        .find("div.bar")
        .animate(
            { width: progressBarWidth },
            timeleft == timetotal ? 0 : 1000,
            "linear"
        );
    if (timeleft > 0) {
        setTimeout(function () {
            progress(timeleft - 1, timetotal, $element);
        }, 1000);
    }
}
