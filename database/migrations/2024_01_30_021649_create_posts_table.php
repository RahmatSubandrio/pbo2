public function up(): void
{
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->string('image');
        $table->string('title');
        $table->text('content');
        $table->timestamps();
    });
}