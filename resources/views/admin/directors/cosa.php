
let awardCount = document.getElementById("awardCount").value;
    function agregarAward() {
        const awardHTML = `<div class="form-group mb-3 award" id="award`+ awardCount +`">
                            <x-admin-card>
                                <div class="form-group mb-3">
                                    <input class="form-control" type="text" name="awards[`+ awardCount +`][name]" placeholder="" >
                                </div>
                                <button class="btn btn-danger w-s" onclick="borraraward('award`+ awardCount +`')">
                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                </button>
                                <div class="form-check form-check-inline">
                                    <div>
                                        <label class="form-check-label" for="mainAward">Principal</label>
                                        <input class="form-check-input" type="radio" name="mainAward" id="mainAward" value="`+ awardCount +`">
                                    </div>
                                    <div>
                                        <label class="form-check-label" for="refused">Rehusar</label>
                                        <input class="form-check-input" type="checkbox" name="awards[`+ awardCount +`][refused]" id="refused" value="true">
                                    </div>
                                    <div>
                                        <label class="form-check-label" for="no_valid">No válido</label>
                                        <input class="form-check-input" type="checkbox" name="awards[`+ awardCount +`][no_valid]" id="no_valid" value="true">
                                    </div>
                                </div>
                            </x-admin-card>
                        </div>`;
        document.getElementById('awards').insertAdjacentHTML('beforeend', awardHTML);
        setChecked();
        awardCount++
    }

function borrarAward(id) {
    let node = document.getElementById(id);
    if (node.checked) {
        node.remove();
        document.querySelector(".award").setAttribute("checked", "true");
    } else {
        node.remove();
    }
    setChecked();
}

function setChecked() {
    totalAwards = document.getElementsByClassName("award").length;
    if (totalAwards == 1) {
        document.getElementById("mainAward").setAttribute("checked", "true");
    }
}