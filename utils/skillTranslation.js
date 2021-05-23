function skillTranslation(skill){
    let skillTranslation = "";

    if(skill == "Intelligence"){skillTranslation="Inteligência";}
    else if(skill == "Strength"){skillTranslation="Força";}
    else if(skill == "Speed"){skillTranslation="Velocidade";}
    else if(skill == "Power"){skillTranslation="Poder";}
    else if(skill == "Durability"){skillTranslation="Durabilidade";}
    else if(skill == "Combat"){skillTranslation="Combate";}

    return skillTranslation;
}