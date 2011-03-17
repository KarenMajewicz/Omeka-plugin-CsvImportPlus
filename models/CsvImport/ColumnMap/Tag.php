<?php
class CsvImport_ColumnMap_Tag extends CsvImport_ColumnMap
{
    public function __construct($columnName)
    {
        parent::__construct($columnName);
        $this->_targetType = CsvImport_ColumnMap::TARGET_TYPE_TAG;
    }

    public function map($row, $result)
    {
        $rawTags = explode(',', $row[$this->_columnName]);
        $trimmed = array_map('trim', $rawTags);
        $tags = array_merge($result, $trimmed);
        return $tags;
    }
}