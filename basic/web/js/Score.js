function refreshScore() {
    $.ajax({
        url: '/game-progress/refresh-score',
        type: 'GET',
        success: function (res) {
            res = JSON.parse(res);
            $("#team_score").text(res['player_team_score']);
            $("#enemy_score").text(res['enemy_team_score']);
        }
    })
}