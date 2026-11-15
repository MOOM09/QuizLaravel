
@foreach ($lecturers as $lecturer)
    <h3>{{ $lecturer->user->name }}</h3>
    <p>{{ $lecturer->user->email }}</p>
    <p>{{ $lecturer->courses_count }}</p>
@endforeach