
<style>
    .experience-wrapper{
        padding: 10px;
        border-radius: 15px;
        border: 1px solid gainsboro;
        margin-bottom: 10px;
    }

    .experience-wrapper .title{
        font-size: 16px;
        font-weight: 800;
    }

    .experience-wrapper .company_name,
    .experience-wrapper .employment_type{
        font-size: 14px;
        color: rgb(120, 120, 120);
    }
    .experience-wrapper .start_date,
    .experience-wrapper .end_date{
        font-size: 14px;
        color: rgb(120, 120, 120);
    }
    .experience-wrapper .location,
    .experience-wrapper .location_type{
        font-size: 14px;
        color: rgb(120, 120, 120);
    }
</style>


@foreach ($experiences as $experience)
    <div class="experience-wrapper">
        <span class="title">{{ Str::ucfirst($experience->title) }}</span><br>
        <span class="company_name">{{ Str::ucfirst($experience->title) }}</span> | <span class="employment_type">{{ Str::ucfirst($experience->employment_type) }}</span><br>
        <span class="start_date">{{ \Carbon\Carbon::parse($experience->start_date)->format('M Y') }}</span> - <span class="end_date">{{ \Carbon\Carbon::parse($experience->end_date)->format('M Y') }}</span><br>
        <span class="location">{{ Str::ucfirst($experience->location) }}</span> | <span class="location_type">{{ Str::ucfirst($experience->location_type) }}</span>
    </div>
@endforeach