<?php
function loadall_diadiem()
{
    $sql = "select * from diadiem order by id_diadiem desc";
    $list_diadiem = pdo_query($sql);
    return $list_diadiem;
}
function loadone_diadiem($id_diadiem)
{
    $sql = "select * from diadiem where id_diadiem = " . $id_diadiem;
    $result = pdo_query_one($sql);
    return $result;
}
function insert_diadiem($tendiadiem)
{
    $sql = "INSERT INTO `diadiem`(`tendiadiem`) VALUES ('$tendiadiem')";
    pdo_execute($sql);
}
function update_diadiem($id_diadiem, $tendiadiem)
{
    $sql = "UPDATE `diadiem` SET `tendiadiem` = '{$tendiadiem}'  WHERE `diadiem`.`id_diadiem` = $id_diadiem";
    pdo_execute($sql);
}
function delete_diadiem($id_diadiem)
{
    $sql = "DELETE FROM diadiem WHERE id_diadiem=" . $id_diadiem;
    pdo_execute($sql);
}