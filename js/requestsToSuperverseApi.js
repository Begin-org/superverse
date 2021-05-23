function getBattlesByGoogleUidUser() {
    return new Promise((resolve, reject) => {

        $.ajax({
            url: "controller/battle.php",
            method: "get",
            dataType: "json",
            success: function (response) {

                if (response.responseStatus === SUCCESSUFUL) {

                    resolve(response.result);

                } else {
                    let statusCode = "";

                    statusCode = ERRORS.filter(item => Number(item.errorCode) == Number(response.responseStatus))[0].errorName;

                    if (statusCode == "" || statusCode == null || statusCode == undefined) {
                        statusCode = "UNKNOW";
                    }

                    reject(statusCode);
                }
            },
            error: function (error) {
                reject(error);
            }
        });
    });
}

function createBattle(idWinner, idLoser, idChosen, skill) {
    return new Promise((resolve, reject) => {

        $.ajax({
            url: "controller/battle.php",
            method: "post",
            data: {idWinner: idWinner, idLoser: idLoser, idChosen: idChosen, skill: skill},
            dataType: "json",
            success: function (response) {

                if (response.responseStatus === SUCCESSUFUL) {

                    resolve(response.result);

                } else {
                    let statusCode = "";

                    statusCode = ERRORS.filter(item => Number(item.errorCode) == Number(response.responseStatus))[0].errorName;

                    if (statusCode == "" || statusCode == null || statusCode == undefined) {
                        statusCode = "UNKNOW";
                    }

                    reject(statusCode);
                }
            },
            error: function (error) {
                reject(error);
            }
        });
    });
}

