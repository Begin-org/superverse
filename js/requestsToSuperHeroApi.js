

const SUCCESSUFUL_SEARCH = 1
const ERRORS = [
    { errorName: "NO_RESULTS_FOR_THIS_SEARCH", errorCode: 0 },
    { errorName: "INVALID_PARAMETERS_IN_SEARCH", errorCode: 2 },
    { errorName: "INVALID_NAME_IN_SEARCH", errorCode: 3 },
    { errorName: "INVALID_ID_IN_SEARCH", errorCode: 4 },
    { errorName: "ERROR_IN_SEARCH", errorCode: 5 }
];

function getCharactersByName(characterName) {
    return new Promise((resolve, reject) => {

        $.ajax({
            url: "controller/getCharactersByName.php",
            method: "get",
            dataType: "json",
            data: {
                characterName: characterName
            },
            success: function (response) {

                console.log(response.responseStatus)

                if (response.responseStatus === SUCCESSUFUL_SEARCH) {

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
            error: function () {
                reject(error);
            }
        });
    });
}

function getCharacterById(characterId) {
    return new Promise((resolve, reject) => {

        $.ajax({
            url: "controller/getCharacterById.php",
            method: "get",
            dataType: "json",
            data: {
                characterId: characterId
            },
            success: function (response) {

                if (response.responseStatus === SUCCESSUFUL_SEARCH) {

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
            error: function () {
                reject(error);
            }
        });
    });
}

function getRandomCharacter() {
    return new Promise((resolve, reject) => {

        $.ajax({
            url: "controller/getRandomCharacter.php",
            method: "get",
            dataType: "json",
            success: function (response) {

                if (response.responseStatus === SUCCESSUFUL_SEARCH) {

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

async function getListOfCharacters(listLimit) {
    return new Promise((resolve, reject) => {

        $.ajax({
            url: "controller/getListOfCharacters.php",
            method: "get",
            dataType: "json",
            data: {
                listLimit: listLimit
            },
            success: function (response) {

                if (response.responseStatus === SUCCESSUFUL_SEARCH) {

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

