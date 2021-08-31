$(function(){
    var development_subjectObject = $('#development_subject');
    var project_roadmapObject = $('#project_roadmap');
    var project_mainObject = $('#project_main');
    var project_subObject = $('#project_sub');

    // on change development_subject
    development_subjectObject.on('change', function(){
        console.log('A');
        var development_id = $(this).val();

        project_roadmapObject.html('<option value="">เลือก...</option>');
        project_mainObject.html('<option value="">เลือก...</option>');
        project_subObject.html('<option value="">เลือก...</option>');

        $.get('get_project_roadmap.php?development_id=' + development_id, function(data){
            var result = JSON.parse(data);
            console.log(result);
            $.each(result, function(index, item){
                project_roadmapObject.append(
                    $('<option></option>').val(item.project_roadmap_id).html(item.project_roadmap_name)
                );
            });
        });
    });

    // on change project_roadmap
    project_roadmapObject.on('change', function(){
        console.log('A');
        var project_roadmap_id = $(this).val();

        project_mainObject.html('<option value="">เลือก...</option>');
        project_subObject.html('<option value="">เลือก...</option>');

        $.get('get_project_main.php?project_roadmap_id=' + project_roadmap_id, function(data){
            var result = JSON.parse(data);
            console.log(result);
            $.each(result, function(index, item){
                project_mainObject.append(
                    $('<option></option>').val(item.project_main_id).html(item.project_main_name)
                );
            });
        });
    });

    // on change project_main
    project_mainObject.on('change', function(){
        console.log('A');
        var project_main_id = $(this).val();

        project_subObject.html('<option value="">เลือก...</option>');

        $.get('get_project_sub.php?project_main_id=' + project_main_id, function(data){
            var result = JSON.parse(data);
            console.log(result);
            
            if (result.length === 0){
                project_subObject.html('<option value="">ไม่มี (ไม่ต้องเลือก)</option>');
            } else {
                $.each(result, function(index, item){
                    project_subObject.append(
                        $('<option></option>').val(item.project_sub_id).html(item.project_sub_name)
                    );
                });
            }
            
        });
    });
});