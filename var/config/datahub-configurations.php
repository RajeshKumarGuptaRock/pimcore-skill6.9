<?php 

return [
    "folders" => [

    ],
    "list" => [
        "JP_about" => [
            "general" => [
                "active" => TRUE,
                "type" => "dataImporterDataObject",
                "name" => "JP_about",
                "description" => "",
                "path" => NULL
            ],
            "loaderConfig" => [
                "type" => "upload",
                "settings" => [
                    "uploadFilePath" => "JP_about/upload.import"
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
        ],
        "Jp_channel1" => [
            "general" => [
                "active" => TRUE,
                "type" => "dataImporterDataObject",
                "name" => "Jp_channel1",
                "group" => "jp",
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
        ],
        "JP_channel2" => [
            "general" => [
                "active" => TRUE,
                "type" => "dataImporterDataObject",
                "name" => "JP_channel2",
                "description" => "",
                "group" => "jp",
                "path" => NULL
            ],
            "loaderConfig" => [
                "type" => "upload",
                "settings" => [
                    "uploadFilePath" => "JP_channel2/upload.import"
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
        ],
        "JP_channel3" => [
            "general" => [
                "active" => TRUE,
                "type" => "dataImporterDataObject",
                "name" => "JP_channel3",
                "description" => "",
                "group" => "jp",
                "path" => NULL
            ],
            "loaderConfig" => [
                "type" => "upload",
                "settings" => [
                    "uploadFilePath" => "JP_channel3/upload.import"
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
        ],
        "AP_about" => [
            "general" => [
                "active" => TRUE,
                "type" => "dataImporterDataObject",
                "name" => "AP_about",
                "description" => "",
                "path" => NULL
            ],
            "loaderConfig" => [
                "type" => "upload",
                "settings" => [
                    "uploadFilePath" => "AP_about/upload.import"
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
        ],
        "BP_about" => [
            "general" => [
                "active" => TRUE,
                "type" => "dataImporterDataObject",
                "name" => "BP_about",
                "description" => "",
                "path" => NULL
            ],
            "loaderConfig" => [
                "type" => "upload",
                "settings" => [
                    "uploadFilePath" => "BP_about/upload.import"
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
