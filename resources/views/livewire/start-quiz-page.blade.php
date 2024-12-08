<body>
<div>
    <h1>
        Quiz: {{$subject->name}}
    </h1>


        @if(isset($score))

        <h1>Skormu di kuis ini: {{$score->score}}</h1>
        <a wire:click="startQuiz">Kerjakan Lagi!</a>
        @else
        <h1>Kamu Belum mengerjakan kuis ini!</h1>
        <a wire:click="startQuiz">Mulai!</a>
        @endif


</div>
</body>
