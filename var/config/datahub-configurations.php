<?php 

return [
    "folders" => [

    ],
    "list" => [
        "Jp_channel1" => [
            "general" => [
                "active" => TRUE,
                "type" => "dataImporterDataObject",
                "name" => "Jp_channel1",
                "description" => "",
                "path" => NULL
            ],
            "loaderConfig" => [
                "type" => "upload",
                "settings" => [
                    "uploadFilePath" => "Jp_channel1/upload.import"
                ]
            ],
            "interpreterConfig" => [
                "type" => "csv",
                "settings" => [
                    "skipFirstRow" => TRUE,
                    "delimiter" => ",",
                    "enclosure" => "\"",
                    "escape" => "\\"
                ]
            ],
            "resolverConfig" => [
                "elementType" => "dataObject",
                "dataObjectClassId" => "1",
                "loadingStrategy" => [
                    "type" => "notLoad"
                ],
                "createLocationStrategy" => [
                    "type" => "staticPath",
                    "settings" => [
                        "path" => "/"
                    ]
                ],
                "locationUpdateStrategy" => [
                    "type" => "noChange"
                ],
                "publishingStrategy" => [
                    "type" => "noChangeUnpublishNew"
                ]
            ],
            "processingConfig" => [
                "executionType" => "parallel",
                "idDataIndex" => ""
            ],
            "mappingConfig" => [

            ],
            "executionConfig" => [
                "cronDefinition" => ""
            ],
            "workspaces" => [

            ]
        ]
    ]
];
